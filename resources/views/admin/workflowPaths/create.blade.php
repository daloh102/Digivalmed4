@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.workflowPath.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.workflow-paths.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nummer">{{ trans('cruds.workflowPath.fields.nummer') }}</label>
                <input class="form-control {{ $errors->has('nummer') ? 'is-invalid' : '' }}" type="text" name="nummer" id="nummer" value="{{ old('nummer', '') }}" required>
                @if($errors->has('nummer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nummer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workflowPath.fields.nummer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.workflowPath.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workflowPath.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eaid">{{ trans('cruds.workflowPath.fields.eaid') }}</label>
                <input class="form-control {{ $errors->has('eaid') ? 'is-invalid' : '' }}" type="text" name="eaid" id="eaid" value="{{ old('eaid', '') }}" required>
                @if($errors->has('eaid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eaid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workflowPath.fields.eaid_helper') }}</span>
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