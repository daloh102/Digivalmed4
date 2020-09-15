@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.dicomNamerConv.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.dicom-namer-convs.update", [$dicomNamerConv->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="source_ip">{{ trans('cruds.dicomNamerConv.fields.source_ip') }}</label>
                <input class="form-control {{ $errors->has('source_ip') ? 'is-invalid' : '' }}" type="text" name="source_ip" id="source_ip" value="{{ old('source_ip', $dicomNamerConv->source_ip) }}" required>
                @if($errors->has('source_ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source_ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerConv.fields.source_ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dest_ip">{{ trans('cruds.dicomNamerConv.fields.dest_ip') }}</label>
                <input class="form-control {{ $errors->has('dest_ip') ? 'is-invalid' : '' }}" type="text" name="dest_ip" id="dest_ip" value="{{ old('dest_ip', $dicomNamerConv->dest_ip) }}" required>
                @if($errors->has('dest_ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dest_ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerConv.fields.dest_ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="protokoll">{{ trans('cruds.dicomNamerConv.fields.protokoll') }}</label>
                <input class="form-control {{ $errors->has('protokoll') ? 'is-invalid' : '' }}" type="text" name="protokoll" id="protokoll" value="{{ old('protokoll', $dicomNamerConv->protokoll) }}" required>
                @if($errors->has('protokoll'))
                    <div class="invalid-feedback">
                        {{ $errors->first('protokoll') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerConv.fields.protokoll_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="medizingeraet">{{ trans('cruds.dicomNamerConv.fields.medizingeraet') }}</label>
                <input class="form-control {{ $errors->has('medizingeraet') ? 'is-invalid' : '' }}" type="text" name="medizingeraet" id="medizingeraet" value="{{ old('medizingeraet', $dicomNamerConv->medizingeraet) }}" required>
                @if($errors->has('medizingeraet'))
                    <div class="invalid-feedback">
                        {{ $errors->first('medizingeraet') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dicomNamerConv.fields.medizingeraet_helper') }}</span>
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