@extends('layouts.admin')
@section('content')
@can('risiken_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.risikens.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.risiken.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.risiken.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Risiken">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.eaid') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.risiko') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.url') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.source') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.auswirkung_brutto') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.auswirkung_netto') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_brutto') }}
                        </th>
                        <th>
                            {{ trans('cruds.risiken.fields.eintrittswahrscheinlichkeit_netto') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($risikens as $key => $risiken)
                        <tr data-entry-id="{{ $risiken->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $risiken->id ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->eaid ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->risiko ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->url ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->source ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->auswirkung_brutto ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->auswirkung_netto ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->eintrittswahrscheinlichkeit_brutto ?? '' }}
                            </td>
                            <td>
                                {{ $risiken->eintrittswahrscheinlichkeit_netto ?? '' }}
                            </td>
                            <td>
                                @can('risiken_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.risikens.show', $risiken->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('risiken_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.risikens.edit', $risiken->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('risiken_delete')
                                    <form action="{{ route('admin.risikens.destroy', $risiken->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('risiken_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.risikens.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Risiken:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection