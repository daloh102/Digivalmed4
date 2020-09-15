@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dicomNamerCbcT.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dicom-namer-cbc-ts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerCbcT.fields.id') }}
                        </th>
                        <td>
                            {{ $dicomNamerCbcT->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerCbcT.fields.name') }}
                        </th>
                        <td>
                            {{ $dicomNamerCbcT->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerCbcT.fields.patientenid') }}
                        </th>
                        <td>
                            {{ $dicomNamerCbcT->patientenid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dicomNamerCbcT.fields.kv') }}
                        </th>
                        <td>
                            {{ $dicomNamerCbcT->kv }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dicom-namer-cbc-ts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection