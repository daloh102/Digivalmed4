@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.medizingerate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.medizingerates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.id') }}
                        </th>
                        <td>
                            {{ $medizingerate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.name') }}
                        </th>
                        <td>
                            {{ $medizingerate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.ip') }}
                        </th>
                        <td>
                            {{ $medizingerate->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.dns_suffix') }}
                        </th>
                        <td>
                            {{ $medizingerate->dns_suffix }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.mac') }}
                        </th>
                        <td>
                            {{ $medizingerate->mac }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.ansprechpartner') }}
                        </th>
                        <td>
                            {{ $medizingerate->ansprechpartner }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medizingerate.fields.notizen') }}
                        </th>
                        <td>
                            {{ $medizingerate->notizen }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.medizingerates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection