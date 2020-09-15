@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workflow.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workflows.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workflow.fields.id') }}
                        </th>
                        <td>
                            {{ $workflow->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workflow.fields.name') }}
                        </th>
                        <td>
                            {{ $workflow->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workflow.fields.ebene') }}
                        </th>
                        <td>
                            {{ $workflow->ebene }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workflow.fields.eaid') }}
                        </th>
                        <td>
                            {{ $workflow->eaid }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workflows.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection