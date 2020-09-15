@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.risiken.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.risikens.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.id') }}
                        </th>
                        <td>
                            {{ $risiken->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.eaid') }}
                        </th>
                        <td>
                            {{ $risiken->eaid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.risiko') }}
                        </th>
                        <td>
                            {{ $risiken->risiko }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.url') }}
                        </th>
                        <td>
                            {{ $risiken->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.source') }}
                        </th>
                        <td>
                            {{ $risiken->source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.auswirkung_brutto') }}
                        </th>
                        <td>
                            {{ $risiken->auswirkung_brutto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.auswirkung_netto') }}
                        </th>
                        <td>
                            {{ $risiken->auswirkung_netto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_brutto') }}
                        </th>
                        <td>
                            {{ $risiken->eintrittswahrscheinlichkeit_brutto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_netto') }}
                        </th>
                        <td>
                            {{ $risiken->eintrittswahrscheinlichkeit_netto }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.risikens.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection