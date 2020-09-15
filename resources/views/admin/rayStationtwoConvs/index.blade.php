@extends('layouts.admin')
@section('content')
@can('ray_stationtwo_conv_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.ray-stationtwo-convs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.rayStationtwoConv.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.rayStationtwoConv.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RayStationtwoConv">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.source_ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.dest_ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.protokoll') }}
                        </th>
                        <th>
                            {{ trans('cruds.rayStationtwoConv.fields.medizingeraet') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rayStationtwoConvs as $key => $rayStationtwoConv)
                        <tr data-entry-id="{{ $rayStationtwoConv->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $rayStationtwoConv->id ?? '' }}
                            </td>
                            <td>
                                {{ $rayStationtwoConv->source_ip ?? '' }}
                            </td>
                            <td>
                                {{ $rayStationtwoConv->dest_ip ?? '' }}
                            </td>
                            <td>
                                {{ $rayStationtwoConv->protokoll ?? '' }}
                            </td>
                            <td>
                                {{ $rayStationtwoConv->medizingeraet ?? '' }}
                            </td>
                            <td>
                                @can('ray_stationtwo_conv_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.ray-stationtwo-convs.show', $rayStationtwoConv->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('ray_stationtwo_conv_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.ray-stationtwo-convs.edit', $rayStationtwoConv->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('ray_stationtwo_conv_delete')
                                    <form action="{{ route('admin.ray-stationtwo-convs.destroy', $rayStationtwoConv->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('ray_stationtwo_conv_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.ray-stationtwo-convs.massDestroy') }}",
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
  let table = $('.datatable-RayStationtwoConv:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection