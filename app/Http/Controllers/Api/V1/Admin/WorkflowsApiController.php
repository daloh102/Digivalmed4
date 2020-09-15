<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkflowRequest;
use App\Http\Requests\UpdateWorkflowRequest;
use App\Http\Resources\Admin\WorkflowResource;
use App\Workflow;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkflowsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('workflow_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkflowResource(Workflow::all());
    }

    public function store(StoreWorkflowRequest $request)
    {
        $workflow = Workflow::create($request->all());

        return (new WorkflowResource($workflow))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Workflow $workflow)
    {
        abort_if(Gate::denies('workflow_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkflowResource($workflow);
    }

    public function update(UpdateWorkflowRequest $request, Workflow $workflow)
    {
        $workflow->update($request->all());

        return (new WorkflowResource($workflow))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Workflow $workflow)
    {
        abort_if(Gate::denies('workflow_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workflow->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
