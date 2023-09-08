@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.surat_masuk.create') }}">
                Tambah Surat Masuk
            </a>
            <a class="btn btn-warning" data-toggle="modal" data-target="#importExcel">
                Import CSV
            </a>

        </div>
    </div>
@endcan
<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{ route('admin.surat_masuk.import_excel') }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}

                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.surat_masuk.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            No Agenda
                        </th>
                        <th>
                            No Surat
                        </th>
                        <th>
                            Pengirim
                        </th>
                        <th>
                            Tanggal Masuk
                        </th>
                        <th>
                            Tanggal Surat
                        </th>
                        <th>
                            Hal Surat
                        </th>
                        <th>
                            Pengolah
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($surat_masuk as $key => $surat_masuk)
                        <tr data-entry-id="{{ $surat_masuk->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $surat_masuk->no_agenda ?? '' }}
                            </td>
                            <td>
                                {{ $surat_masuk->no_surat_masuk ?? '' }}
                            </td>
                            <td>
                                {{ $surat_masuk->pengirim ?? '' }}
                            </td>
                            <td>
                                {{ $surat_masuk->tanggal_masuk ?? '' }}
                            </td>
                            <td>
                                {{ $surat_masuk->tanggal_surat ?? '' }}
                            </td>
                            <td>
                                {{ $surat_masuk->hal_surat ?? '' }}
                            </td>
                            <td>
                                {{ $surat_masuk->pengolah ?? '' }}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.surat_masuk.show', $surat_masuk->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('update_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.surat_masuk.edit', $surat_masuk->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                <a class="btn btn-xs btn-success" href="{{ route('admin.surat_masuk.print', $surat_masuk->id) }}" target="_blank">
                                    Cetak
                                </a>
                                @can('delete_manage')
                                <form action="{{ route('admin.surat_masuk.destroy', $surat_masuk->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.surat_masuk.mass_destroy') }}",
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
