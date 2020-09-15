@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.dicomNamerIo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.dicom-namer-ios.update", [$dicomNamerIo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="bytes">{{ trans('cruds.dicomNamerIo.fields.bytes') }}</label>
                <input class="form-control {{ $errors->has('bytes') ? 'is-invalid' : '' }}" type="text" name="bytes" id="bytes" value="{{ old('bytes', $dicomNamerIo->bytes) }}" required>
                @if($errors->has('bytes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bytes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerIo.fields.bytes_helper') }}</span>
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