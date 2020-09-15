@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.medizingerate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.medizingerates.update", [$medizingerate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.medizingerate.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $medizingerate->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.medizingerate.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ip">{{ trans('cruds.medizingerate.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', $medizingerate->ip) }}" required>
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.medizingerate.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dns_suffix">{{ trans('cruds.medizingerate.fields.dns_suffix') }}</label>
                <input class="form-control {{ $errors->has('dns_suffix') ? 'is-invalid' : '' }}" type="text" name="dns_suffix" id="dns_suffix" value="{{ old('dns_suffix', $medizingerate->dns_suffix) }}" required>
                @if($errors->has('dns_suffix'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dns_suffix') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.medizingerate.fields.dns_suffix_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mac">{{ trans('cruds.medizingerate.fields.mac') }}</label>
                <input class="form-control {{ $errors->has('mac') ? 'is-invalid' : '' }}" type="text" name="mac" id="mac" value="{{ old('mac', $medizingerate->mac) }}" required>
                @if($errors->has('mac'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mac') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.medizingerate.fields.mac_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ansprechpartner">{{ trans('cruds.medizingerate.fields.ansprechpartner') }}</label>
                <input class="form-control {{ $errors->has('ansprechpartner') ? 'is-invalid' : '' }}" type="text" name="ansprechpartner" id="ansprechpartner" value="{{ old('ansprechpartner', $medizingerate->ansprechpartner) }}" required>
                @if($errors->has('ansprechpartner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ansprechpartner') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.medizingerate.fields.ansprechpartner_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notizen">{{ trans('cruds.medizingerate.fields.notizen') }}</label>
                <input class="form-control {{ $errors->has('notizen') ? 'is-invalid' : '' }}" type="text" name="notizen" id="notizen" value="{{ old('notizen', $medizingerate->notizen) }}">
                @if($errors->has('notizen'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notizen') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.medizingerate.fields.notizen_helper') }}</span>
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