@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.risiken.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.risikens.update", [$risiken->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="eaid">{{ trans('cruds.risiken.fields.eaid') }}</label>
                <input class="form-control {{ $errors->has('eaid') ? 'is-invalid' : '' }}" type="text" name="eaid" id="eaid" value="{{ old('eaid', $risiken->eaid) }}" required>
                @if($errors->has('eaid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eaid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.eaid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="risiko">{{ trans('cruds.risiken.fields.risiko') }}</label>
                <input class="form-control {{ $errors->has('risiko') ? 'is-invalid' : '' }}" type="text" name="risiko" id="risiko" value="{{ old('risiko', $risiken->risiko) }}" required>
                @if($errors->has('risiko'))
                    <div class="invalid-feedback">
                        {{ $errors->first('risiko') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.risiko_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="url">{{ trans('cruds.risiken.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', $risiken->url) }}" required>
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="source">{{ trans('cruds.risiken.fields.source') }}</label>
                <input class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" type="text" name="source" id="source" value="{{ old('source', $risiken->source) }}" required>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.source_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="auswirkung_brutto">{{ trans('cruds.risiken.fields.auswirkung_brutto') }}</label>
                <input class="form-control {{ $errors->has('auswirkung_brutto') ? 'is-invalid' : '' }}" type="text" name="auswirkung_brutto" id="auswirkung_brutto" value="{{ old('auswirkung_brutto', $risiken->auswirkung_brutto) }}" required>
                @if($errors->has('auswirkung_brutto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('auswirkung_brutto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.auswirkung_brutto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="auswirkung_netto">{{ trans('cruds.risiken.fields.auswirkung_netto') }}</label>
                <input class="form-control {{ $errors->has('auswirkung_netto') ? 'is-invalid' : '' }}" type="text" name="auswirkung_netto" id="auswirkung_netto" value="{{ old('auswirkung_netto', $risiken->auswirkung_netto) }}" required>
                @if($errors->has('auswirkung_netto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('auswirkung_netto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.auswirkung_netto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eintrittswahrscheinlichkeit_brutto">{{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_brutto') }}</label>
                <input class="form-control {{ $errors->has('eintrittswahrscheinlichkeit_brutto') ? 'is-invalid' : '' }}" type="text" name="eintrittswahrscheinlichkeit_brutto" id="eintrittswahrscheinlichkeit_brutto" value="{{ old('eintrittswahrscheinlichkeit_brutto', $risiken->eintrittswahrscheinlichkeit_brutto) }}" required>
                @if($errors->has('eintrittswahrscheinlichkeit_brutto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eintrittswahrscheinlichkeit_brutto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_brutto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eintrittswahrscheinlichkeit_netto">{{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_netto') }}</label>
                <input class="form-control {{ $errors->has('eintrittswahrscheinlichkeit_netto') ? 'is-invalid' : '' }}" type="text" name="eintrittswahrscheinlichkeit_netto" id="eintrittswahrscheinlichkeit_netto" value="{{ old('eintrittswahrscheinlichkeit_netto', $risiken->eintrittswahrscheinlichkeit_netto) }}" required>
                @if($errors->has('eintrittswahrscheinlichkeit_netto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eintrittswahrscheinlichkeit_netto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_netto_helper') }}</span>
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