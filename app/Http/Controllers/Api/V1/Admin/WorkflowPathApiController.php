<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkflowPathRequest;
use App\Http\Requests\UpdateWorkflowPathRequest;
use App\Http\Resources\Admin\WorkflowPathResource;
use App\WorkflowPath;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkflowPathApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('workflow_path_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkflowPathResource(WorkflowPath::all());
    }

    public function store(StoreWorkflowPathRequest $request)
    {
        $workflowPath = WorkflowPath::create($request->all());

        return (new WorkflowPathResource($workflowPath))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(WorkflowPath $workflowPath)
    {
        abort_if(Gate::denies('workflow_path_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkflowPathResource($workflowPath);
    }

    public function update(UpdateWorkflowPathRequest $request, WorkflowPath $workflowPath)
    {
        $workflowPath->update($request->all());

        return (new WorkflowPathResource($workflowPath))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(WorkflowPath $workflowPath)
    {
        abort_if(Gate::denies('workflow_path_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workflowPath->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
