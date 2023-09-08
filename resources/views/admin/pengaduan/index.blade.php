@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Pengaduan
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
                            NIK Pelapor
                        </th>
                        <th>
                            Nama Pelapor
                        </th>
                        <th>
                            Nama Terlapor
                        </th>
                        <th>
                            Instansi Terlapor
                        </th>
                        <th>
                            Kategori Laporan
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($pengaduan as $key => $pengaduan)
                        <tr data-entry-id="{{ $pengaduan->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $i++ }}
                            </td>
                            <td>
                                {{ $pengaduan->nik_pelapor ?? '' }}
                            </td>
                            <td>
                                {{ $pengaduan->nama_pelapor ?? '' }}
                            </td>
                            <td>
                                {{ $pengaduan->nama_terlapor ?? '' }}
                            </td>
                            <td>
                                {{ $pengaduan->nama_instansi ?? '' }}
                            </td>
                            <td>
                                {{ $pengaduan->kategori_laporan ?? '' }}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.pengaduan.show', $pengaduan->id) }}">
                                    {{ trans('global.view') }}
                                </a>
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
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
