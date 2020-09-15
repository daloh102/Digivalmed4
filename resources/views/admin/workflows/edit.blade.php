@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.workflow.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.workflows.update", [$workflow->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.workflow.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $workflow->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workflow.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ebene">{{ trans('cruds.workflow.fields.ebene') }}</label>
                <input class="form-control {{ $errors->has('ebene') ? 'is-invalid' : '' }}" type="text" name="ebene" id="ebene" value="{{ old('ebene', $workflow->ebene) }}" required>
                @if($errors->has('ebene'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ebene') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workflow.fields.ebene_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eaid">{{ trans('cruds.workflow.fields.eaid') }}</label>
                <input class="form-control {{ $errors->has('eaid') ? 'is-invalid' : '' }}" type="text" name="eaid" id="eaid" value="{{ old('eaid', $workflow->eaid) }}" required>
                @if($errors->has('eaid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eaid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workflow.fields.eaid_helper') }}</span>
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