@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dicomNamerConv.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dicom-namer-convs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.id') }}
                        </th>
                        <td>
                            {{ $dicomNamerConv->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.source_ip') }}
                        </th>
                        <td>
                            {{ $dicomNamerConv->source_ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.dest_ip') }}
                        </th>
                        <td>
                            {{ $dicomNamerConv->dest_ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.protokoll') }}
                        </th>
                        <td>
                            {{ $dicomNamerConv->protokoll }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.medizingeraet') }}
                        </th>
                        <td>
                            {{ $dicomNamerConv->medizingeraet }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dicom-namer-convs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection