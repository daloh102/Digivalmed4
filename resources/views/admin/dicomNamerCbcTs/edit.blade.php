@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.dicomNamerCbcT.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.dicom-namer-cbc-ts.update", [$dicomNamerCbcT->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.dicomNamerCbcT.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $dicomNamerCbcT->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerCbcT.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="patientenid">{{ trans('cruds.dicomNamerCbcT.fields.patientenid') }}</label>
                <input class="form-control {{ $errors->has('patientenid') ? 'is-invalid' : '' }}" type="text" name="patientenid" id="patientenid" value="{{ old('patientenid', $dicomNamerCbcT->patientenid) }}" required>
                @if($errors->has('patientenid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('patientenid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerCbcT.fields.patientenid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kv">{{ trans('cruds.dicomNamerCbcT.fields.kv') }}</label>
                <input class="form-control {{ $errors->has('kv') ? 'is-invalid' : '' }}" type="text" name="kv" id="kv" value="{{ old('kv', $dicomNamerCbcT->kv) }}" required>
                @if($errors->has('kv'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kv') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerCbcT.fields.kv_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection