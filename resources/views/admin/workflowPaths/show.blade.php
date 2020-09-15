@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workflowPath.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workflow-paths.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workflowPath.fields.id') }}
                        </th>
                        <td>
                            {{ $workflowPath->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workflowPath.fields.nummer') }}
                        </th>
                        <td>
                            {{ $workflowPath->nummer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workflowPath.fields.name') }}
                        </th>
                        <td>
                            {{ $workflowPath->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workflowPath.fields.eaid') }}
                        </th>
                        <td>
                            {{ $workflowPath->eaid }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workflow-paths.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection