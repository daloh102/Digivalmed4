@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.result.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.results.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.result.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eaid">{{ trans('cruds.result.fields.eaid') }}</label>
                <input class="form-control {{ $errors->has('eaid') ? 'is-invalid' : '' }}" type="text" name="eaid" id="eaid" value="{{ old('eaid', '') }}" required>
                @if($errors->has('eaid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eaid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.eaid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ebene">{{ trans('cruds.result.fields.ebene') }}</label>
                <input class="form-control {{ $errors->has('ebene') ? 'is-invalid' : '' }}" type="text" name="ebene" id="ebene" value="{{ old('ebene', '') }}" required>
                @if($errors->has('ebene'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ebene') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.ebene_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="risiko">{{ trans('cruds.result.fields.risiko') }}</label>
                <input class="form-control {{ $errors->has('risiko') ? 'is-invalid' : '' }}" type="text" name="risiko" id="risiko" value="{{ old('risiko', '') }}" required>
                @if($errors->has('risiko'))
                    <div class="invalid-feedback">
                        {{ $errors->first('risiko') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.risiko_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="risikoid">{{ trans('cruds.result.fields.risikoid') }}</label>
                <input class="form-control {{ $errors->has('risikoid') ? 'is-invalid' : '' }}" type="text" name="risikoid" id="risikoid" value="{{ old('risikoid', '') }}" required>
                @if($errors->has('risikoid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('risikoid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.risikoid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="url">{{ trans('cruds.result.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', '') }}" required>
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="source">{{ trans('cruds.result.fields.source') }}</label>
                <input class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" type="text" name="source" id="source" value="{{ old('source', '') }}" required>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.source_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="auswirkung_netto">{{ trans('cruds.result.fields.auswirkung_netto') }}</label>
                <input class="form-control {{ $errors->has('auswirkung_netto') ? 'is-invalid' : '' }}" type="text" name="auswirkung_netto" id="auswirkung_netto" value="{{ old('auswirkung_netto', '') }}" required>
                @if($errors->has('auswirkung_netto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('auswirkung_netto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.auswirkung_netto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="auswirkung_brutto">{{ trans('cruds.result.fields.auswirkung_brutto') }}</label>
                <input class="form-control {{ $errors->has('auswirkung_brutto') ? 'is-invalid' : '' }}" type="text" name="auswirkung_brutto" id="auswirkung_brutto" value="{{ old('auswirkung_brutto', '') }}" required>
                @if($errors->has('auswirkung_brutto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('auswirkung_brutto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.auswirkung_brutto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eintrittswahrscheinlichkeit_brutto">{{ trans('cruds.result.fields.eintrittswahrscheinlichkeit_brutto') }}</label>
                <input class="form-control {{ $errors->has('eintrittswahrscheinlichkeit_brutto') ? 'is-invalid' : '' }}" type="text" name="eintrittswahrscheinlichkeit_brutto" id="eintrittswahrscheinlichkeit_brutto" value="{{ old('eintrittswahrscheinlichkeit_brutto', '') }}" required>
                @if($errors->has('eintrittswahrscheinlichkeit_brutto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eintrittswahrscheinlichkeit_brutto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.eintrittswahrscheinlichkeit_brutto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="eintrittswahrscheinlichkeit_netto">{{ trans('cruds.result.fields.eintrittswahrscheinlichkeit_netto') }}</label>
                <input class="form-control {{ $errors->has('eintrittswahrscheinlichkeit_netto') ? 'is-invalid' : '' }}" type="text" name="eintrittswahrscheinlichkeit_netto" id="eintrittswahrscheinlichkeit_netto" value="{{ old('eintrittswahrscheinlichkeit_netto', '') }}">
                @if($errors->has('eintrittswahrscheinlichkeit_netto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eintrittswahrscheinlichkeit_netto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.eintrittswahrscheinlichkeit_netto_helper') }}</span>
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