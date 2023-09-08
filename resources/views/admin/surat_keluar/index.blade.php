@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.surat_keluar.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.surat_keluar.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.surat_keluar.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            No
                        </th>
                        <th>
                            No Surat
                        </th>
                        <th>
                            No Agenda
                        </th>
                        <th>
                            Tertuju
                        </th>
                        <th>
                            Tembusan
                        </th>
                        <th>
                            Tanggal Surat
                        </th>
                        <th>
                            Hal Surat
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($surat_keluar as $key => $surat_keluar)
                        <tr data-entry-id="{{ $surat_keluar->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $surat_keluar->no_surat_keluar ?? '' }}
                            </td>
                            <td>
                                {{ $surat_keluar->no_agenda ?? '' }}
                            </td>
                            <td>
                                {{ $surat_keluar->tertuju ?? '' }}
                            </td>
                            <td>
                                {{ $surat_keluar->tembusan ?? '' }}
                            </td>
                            <td>
                                {{ $surat_keluar->tanggal_keluar ?? '' }}
                            </td>
                            <td>
                                {{ $surat_keluar->hal_surat ?? '' }}
                            </td>

                            <td>
                                <!-- <a download="{{ $surat_keluar->no_surat_keluar }}" class="btn btn-xs btn-warning" href="{{ url('/upload/masuk/'.$surat_keluar->lampiran) }}" title="ImageName">
                                    Download
                                </a> -->
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.surat_keluar.show', $surat_keluar->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('update_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.surat_keluar.edit', $surat_keluar->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('delete_manage')
                                <form action="{{ route('admin.surat_keluar.destroy', $surat_keluar->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endcan

                            </td>

                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('users_manage')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.surat_keluar.mass_destroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
