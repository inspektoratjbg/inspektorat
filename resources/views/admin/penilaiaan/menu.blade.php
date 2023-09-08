@extends('layouts.admin')
@section('content')
@can('add_manage')

@endcan
<div class="card">
    <div class="card-header">
        SKP
    </div>

    <div class="card-body">
    @if($sakip->status3==1)
        <a href="{{ route('admin.penilaiaan.skpprint', $sakip['id']) }}" target="_blank" class="btn btn-danger">
            <i class="fas fa-fw fa-print"></i> Cetak SKP
        </a>
    @else
        <a href="#" class="btn btn-dark">
            <i class="fas fa-fw fa-print"></i> Cetak SKP
        </a>
    @endif
    <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-User">
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
                            AK
                        </th>
                        <th>
                            Output
                        </th>
                        <th>
                            Kualitas
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skp as $key => $skp)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $skp['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $skp['sasaran'] }}
                        </td>
                        <td>
                            {{ $skp['skp_target_ak'] }}
                        </td>
                        <td>
                            {{ $skp['target']." ".$skp['satuan'] }}
                        </td>
                        <td>
                            {{ $skp['skp_target_mutu'] }}
                        </td>
                        <td>
                            {{ $skp['skp_target_waktu'] }}
                        </td>
                        <td>
                            @if ($sakip['status3']!=1)
                                @can('progress_pengukuran_manage')
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.penilaiaan.skpprogress', $skp['id']) }}">
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
<div class="card">
    <div class="card-header">
        Pengukuran
    </div>
    <div class="card-body">

    @if($sakip->status3==1)
        <a href="{{ route('admin.penilaiaan.pengukuranprint', $sakip['id']) }}" target="_blank" class="btn btn-danger">
            <i class="fas fa-fw fa-print"></i> Cetak Pengukuran
        </a>
    @else
        <a href="#" class="btn btn-dark">
            <i class="fas fa-fw fa-print"></i> Cetak Pengukuran
        </a>
    @endif
    <br><br>

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
                            AK
                        </th>
                        <th>
                            Output
                        </th>
                        <th>
                            Kualitas
                        </th>
                        <th>
                            Waktu
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
                            {{ $pengukuran['skp_realisasi_ak'] }}
                        </td>
                        <td>
                            {{ $pengukuran['skp_realisasi_ouput']." ".$skp['satuan'] }}
                        </td>
                        <td>
                            {{ $pengukuran['skp_realisasi_mutu'] }}
                        </td>
                        <td>
                            {{ $pengukuran['skp_realisasi_waktu'] }}
                        </td>
                        <td>
                            @if ($sakip['status3']!=1)
                                @can('progress_pengukuran_manage')
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.penilaiaan.pengukuranprogress', $pengukuran['id']) }}">
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
<div class="card">
    <div class="card-header">
        Penilaiaan
    </div>
    <div class="card-body">

    @if($sakip->status3==1)
        <a href="{{ route('admin.penilaiaan.penilaiaanprint', $sakip['id']) }}" target="_blank" class="btn btn-danger">
            <i class="fas fa-fw fa-print"></i> Cetak Penilaiaan
        </a>
    @else
        <a href="#" class="btn btn-dark">
            <i class="fas fa-fw fa-print"></i> Cetak Penilaiaan
        </a>
    @endif
    <br><br>

        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Orientasi Pelayanan
                        </th>
                        <th>
                            Integritas
                        </th>
                        <th>
                            Komitmen
                        </th>
                        <th>
                            Disiplin
                        </th>
                        <th>
                            Kerjasama
                        </th>
                        <th>
                            Kepemimpinan
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penilaiaan as $key => $penilaiaan)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $penilaiaan->pelayanan }}
                        </td>
                        <td>
                            {{ $penilaiaan->integritas }}
                        </td>
                        <td>
                            {{ $penilaiaan->komitmen }}
                        </td>
                        <td>
                            {{ $penilaiaan->disiplin }}
                        </td>
                        <td>
                            {{ $penilaiaan->kerjasama }}
                        </td>
                        <td>
                            {{ $penilaiaan->kepemimpinan }}
                        </td>
                        <td>
                            @if ($sakip['status3']!=1)
                                @can('progress_pengukuran_manage')
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.penilaiaan.penilaiaanprogress', $penilaiaan['id']) }}">
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
