@extends('layouts.admin')
@section('content')
@can('inventaris_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.barang.create") }}">
                Tambah Barang
            </a>
            <a class="btn btn-primary" data-toggle="modal" data-target="#importExcel">
                Import CSV
            </a>
        </div>
    </div>
@endcan
<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{ route('admin.barang.import_excel') }}" enctype="multipart/form-data">
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
        {{ trans('cruds.barang.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-maul">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Satuan
                        </th>
                        <th>
                            Harga Barang
                        </th>
                        <th>
                            Jenis Barang
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($barang as $key => $barang)
                        <tr data-entry-id="{{ $barang->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $barang->nama_barang ?? '' }}
                            </td>
                            <td>
                                {{ $barang->nama_satuan ?? '' }}
                            </td>
                            <td>
                                Rp. {{ number_format($barang->harga_barang, 2, ".", ",") }}
                            </td>
                            <td>
                                {{ $barang->nama_jenis_barang ?? '' }}
                            </td>
                            <td>
                                @can('inventaris_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.barang.show', $barang->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('inventaris_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.barang.edit', $barang->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('inventaris_manage')
                                <form action="{{ route('admin.barang.destroy', $barang->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-maul:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
