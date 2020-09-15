<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWorkflowPathRequest;
use App\Http\Requests\StoreWorkflowPathRequest;
use App\Http\Requests\UpdateWorkflowPathRequest;
use App\WorkflowPath;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkflowPathController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('workflow_path_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workflowPaths = WorkflowPath::all();

        return view('admin.workflowPaths.index', compact('workflowPaths'));
    }

    public function create()
    {
        abort_if(Gate::denies('workflow_path_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workflowPaths.create');
    }

    public function store(StoreWorkflowPathRequest $request)
    {
        $workflowPath = WorkflowPath::create($request->all());

        return redirect()->route('admin.workflow-paths.index');
    }

    public function edit(WorkflowPath $workflowPath)
    {
        abort_if(Gate::denies('workflow_path_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workflowPaths.edit', compact('workflowPath'));
    }

    public function update(UpdateWorkflowPathRequest $request, WorkflowPath $workflowPath)
    {
        $workflowPath->update($request->all());

        return redirect()->route('admin.workflow-paths.index');
    }

    public function show(WorkflowPath $workflowPath)
    {
        abort_if(Gate::denies('workflow_path_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workflowPaths.show', compact('workflowPath'));
    }

    public function destroy(WorkflowPath $workflowPath)
    {
        abort_if(Gate::denies('workflow_path_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workflowPath->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkflowPathRequest $request)
    {
        WorkflowPath::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
