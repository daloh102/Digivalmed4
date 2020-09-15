@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.rayStationtwoIo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ray-stationtwo-ios.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="bytes">{{ trans('cruds.rayStationtwoIo.fields.bytes') }}</label>
                <input class="form-control {{ $errors->has('bytes') ? 'is-invalid' : '' }}" type="text" name="bytes" id="bytes" value="{{ old('bytes', '') }}" required>
                @if($errors->has('bytes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bytes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.rayStationtwoIo.fields.bytes_helper') }}</span>
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