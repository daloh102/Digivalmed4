@extends('layouts.admin')
@section('content')
@can('dicom_namer_io_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.dicom-namer-ios.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.dicomNamerIo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.dicomNamerIo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-DicomNamerIo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerIo.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerIo.fields.bytes') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dicomNamerIos as $key => $dicomNamerIo)
                        <tr data-entry-id="{{ $dicomNamerIo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $dicomNamerIo->id ?? '' }}
                            </td>
                            <td>
                                {{ $dicomNamerIo->bytes ?? '' }}
                            </td>
                            <td>
                                @can('dicom_namer_io_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.dicom-namer-ios.show', $dicomNamerIo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('dicom_namer_io_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.dicom-namer-ios.edit', $dicomNamerIo->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('dicom_namer_io_delete')
                                    <form action="{{ route('admin.dicom-namer-ios.destroy', $dicomNamerIo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('dicom_namer_io_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.dicom-namer-ios.massDestroy') }}",
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
  let table = $('.datatable-DicomNamerIo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection