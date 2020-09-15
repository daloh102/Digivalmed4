<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWorkflowRequest;
use App\Http\Requests\StoreWorkflowRequest;
use App\Http\Requests\UpdateWorkflowRequest;
use App\Workflow;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkflowsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('workflow_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workflows = Workflow::all();

        return view('admin.workflows.index', compact('workflows'));
    }

    public function create()
    {
        abort_if(Gate::denies('workflow_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workflows.create');
    }

    public function store(StoreWorkflowRequest $request)
    {
        $workflow = Workflow::create($request->all());

        return redirect()->route('admin.workflows.index');
    }

    public function edit(Workflow $workflow)
    {
        abort_if(Gate::denies('workflow_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workflows.edit', compact('workflow'));
    }

    public function update(UpdateWorkflowRequest $request, Workflow $workflow)
    {
        $workflow->update($request->all());

        return redirect()->route('admin.workflows.index');
    }

    public function show(Workflow $workflow)
    {
        abort_if(Gate::denies('workflow_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workflows.show', compact('workflow'));
    }

    public function destroy(Workflow $workflow)
    {
        abort_if(Gate::denies('workflow_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workflow->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkflowRequest $request)
    {
        Workflow::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
