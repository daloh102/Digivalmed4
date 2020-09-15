@extends('layouts.admin')
@section('content')
@can('dicom_namer_conv_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.dicom-namer-convs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.dicomNamerConv.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.dicomNamerConv.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-DicomNamerConv">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.source_ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.dest_ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.protokoll') }}
                        </th>
                        <th>
                            {{ trans('cruds.dicomNamerConv.fields.medizingeraet') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dicomNamerConvs as $key => $dicomNamerConv)
                        <tr data-entry-id="{{ $dicomNamerConv->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $dicomNamerConv->id ?? '' }}
                            </td>
                            <td>
                                {{ $dicomNamerConv->source_ip ?? '' }}
                            </td>
                            <td>
                                {{ $dicomNamerConv->dest_ip ?? '' }}
                            </td>
                            <td>
                                {{ $dicomNamerConv->protokoll ?? '' }}
                            </td>
                            <td>
                                {{ $dicomNamerConv->medizingeraet ?? '' }}
                            </td>
                            <td>
                                @can('dicom_namer_conv_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.dicom-namer-convs.show', $dicomNamerConv->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('dicom_namer_conv_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.dicom-namer-convs.edit', $dicomNamerConv->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('dicom_namer_conv_delete')
                                    <form action="{{ route('admin.dicom-namer-convs.destroy', $dicomNamerConv->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('dicom_namer_conv_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.dicom-namer-convs.massDestroy') }}",
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
  let table = $('.datatable-DicomNamerConv:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection