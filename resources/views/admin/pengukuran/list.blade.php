@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <?php $x=date('m', strtotime($sakip->tanggal_surat));
                $x=intval($x);
            ?>
            @if ($sakip['status4']==1)
                <a class="btn btn-success" href="{{ route('admin.pengukuran.print', $sakip->id) }}" target="_blank">
                    <i class="fas fa-fw fa-print"></i> Cetak pengukuran
                </a>
                @if($x>=10)
                    <a class="btn btn-success" href="{{ route('admin.pengukuran.tahunan', $sakip->id) }}" target="_blank">
                        <i class="fas fa-fw fa-print"></i> Cetak pengukuran Tahunan
                    </a>
                @endif
            @else
                <a class="btn btn-dark" href="#">
                    <i class="fas fa-fw fa-print"></i> Cetak pengukuran
                </a>
                @if($x>=10)
                    <a class="btn btn-dark" href="#">
                        <i class="fas fa-fw fa-print"></i> Cetak pengukuran Tahunan
                    </a>
                @endif
            @endif

            <a class="btn btn-warning" href="{{ route('admin.sakip.index') }}">
                Kembali
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pengukuran.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            No Urut
                        </th>
                        <th>
                            Sasaran
                        </th>
                        <th>
                            Indikator Kinerja
                        </th>
                        <th>
                            Target
                        </th>
                        <th>
                            Realisasi
                        </th>
                        <th>
                            Capaian (%)
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengukuran as $key => $pengukuran)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $pengukuran['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $pengukuran['sasaran'] }}
                        </td>
                        <td>
                            {{ $pengukuran['indikator_kinerja'] }}
                        </td>
                        <td>
                            {{ $pengukuran['target']." ".$pengukuran['satuan'] }}
                        </td>
                        <td>
                            {{ $pengukuran['realisasi'] }}
                        </td>
                        <td>
                            {{ round($pengukuran['capaian'],2).' %' }}
                        </td>
                        <td>
                            @can('pengukuran_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.pengukuran.show', $pengukuran['id']) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @if ($sakip['status4']!=1)
                                    @can('progress_pengukuran_manage')
                                    <a class="btn btn-xs btn-danger" href="{{ route('admin.pengukuran.edit', $pengukuran['id']) }}">
                                        Progress
                                    </a>
                                    @endcan
                                @endif
                        </td>
                    </tr>
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
