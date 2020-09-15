@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.result.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.id') }}
                        </th>
                        <td>
                            {{ $result->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.name') }}
                        </th>
                        <td>
                            {{ $result->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.eaid') }}
                        </th>
                        <td>
                            {{ $result->eaid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.ebene') }}
                        </th>
                        <td>
                            {{ $result->ebene }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.risiko') }}
                        </th>
                        <td>
                            {{ $result->risiko }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.risikoid') }}
                        </th>
                        <td>
                            {{ $result->risikoid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.url') }}
                        </th>
                        <td>
                            {{ $result->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.source') }}
                        </th>
                        <td>
                            {{ $result->source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.auswirkung_netto') }}
                        </th>
                        <td>
                            {{ $result->auswirkung_netto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.auswirkung_brutto') }}
                        </th>
                        <td>
                            {{ $result->auswirkung_brutto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.eintrittswahrscheinlichkeit_brutto') }}
                        </th>
                        <td>
                            {{ $result->eintrittswahrscheinlichkeit_brutto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.result.fields.eintrittswahrscheinlichkeit_netto') }}
                        </th>
                        <td>
                            {{ $result->eintrittswahrscheinlichkeit_netto }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection