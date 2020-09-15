@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.rayStationtwoConv.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ray-stationtwo-convs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.id') }}
                        </th>
                        <td>
                            {{ $rayStationtwoConv->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.source_ip') }}
                        </th>
                        <td>
                            {{ $rayStationtwoConv->source_ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.dest_ip') }}
                        </th>
                        <td>
                            {{ $rayStationtwoConv->dest_ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.protokoll') }}
                        </th>
                        <td>
                            {{ $rayStationtwoConv->protokoll }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.medizingeraet') }}
                        </th>
                        <td>
                            {{ $rayStationtwoConv->medizingeraet }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ray-stationtwo-convs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection