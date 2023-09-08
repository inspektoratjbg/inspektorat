@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Data Pengajuan Sakip
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">
                            No
                        </th>
                        <th>
                            Nama Pegawai
                        </th>
                        <th>
                            Jenis Sakip
                        </th>
                        <th>
                            Tahun
                        </th>
                        <th>
                            Verifikasi Perjanjian
                        </th>
                        <th>
                            Verifikasi IKI dan IKU
                        </th>
                        <th>
                            Verifikasi SKP
                        </th>
                        <th>
                            Verifikasi Pengukuran
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($sakipp as $key => $sakipp)

                    <tr>
                        <td>
                            {{ $i }}
                        </td>
                        <td>
                            {{ $sakipp['nama_pihak_pertama'] }}
                        </td>
                        <td>
                            {{ $sakipp['tipe_sakip'] }}
                        </td>
                        <td>
                            {{ $sakipp['tahun'] }}
                        </td>
                        <td>
                            @if ($sakipp['status1']==2)
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.sakipp.verif1', $sakipp['id']) }}">
                                    Belum Verifikasi
                                </a>
                            @elseif($sakipp['status1']==3)
                                <a class="btn btn-xs btn-warning" href="{{ route('admin.sakipp.verif1', $sakipp['id']) }}">
                                    Di Revisi
                                </a>
                            @else
                                <a class="btn btn-xs btn-success" href="{{ route('admin.sakipp.verif1', $sakipp['id']) }}">
                                    Sudah Verifikasi
                                </a>
                            @endif
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.perjanjian.print', $sakipp['id']) }}" target="_blank">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            @if ($sakipp['status2']==2)
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.sakipp.verif2', $sakipp['id']) }}">
                                    Belum Verifikasi
                                </a>
                            @elseif($sakipp['status2']==3)
                                <a class="btn btn-xs btn-warning" href="{{ route('admin.sakipp.verif2', $sakipp['id']) }}">
                                    Di Revisi
                                </a>
                            @else
                                <a class="btn btn-xs btn-success" href="{{ route('admin.sakipp.verif2', $sakipp['id']) }}">
                                    Sudah Verifikasi
                                </a>
                            @endif
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.indikator.print', $sakipp['id']) }}" target="_blank">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            @if ($sakipp['status3']==2)
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.sakipp.verif3', $sakipp['id']) }}">
                                    Belum Verifikasi
                                </a>
                            @elseif($sakipp['status3']==3)
                                <a class="btn btn-xs btn-warning" href="{{ route('admin.sakipp.verif3', $sakipp['id']) }}">
                                    Di Revisi
                                </a>
                            @else
                                <a class="btn btn-xs btn-success" href="{{ route('admin.sakipp.verif3', $sakipp['id']) }}">
                                    Sudah Verifikasi
                                </a>
                            @endif
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.penilaiaan.skpprint', $sakipp['id']) }}" target="_blank">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.penilaiaan.pengukuranprint', $sakipp['id']) }}" target="_blank">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.penilaiaan.penilaiaanprint', $sakipp['id']) }}" target="_blank">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            @if ($sakipp['status4']==2)
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.sakipp.verif4', $sakipp['id']) }}">
                                    Belum Verifikasi
                                </a>
                            @elseif($sakipp['status4']==3)
                                <a class="btn btn-xs btn-warning" href="{{ route('admin.sakipp.verif4', $sakipp['id']) }}">
                                    Di Revisi
                                </a>
                            @else
                                <a class="btn btn-xs btn-success" href="{{ route('admin.sakipp.verif4', $sakipp['id']) }}">
                                    Sudah Verifikasi
                                </a>
                            @endif
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.pengukuran.print', $sakipp['id']) }}" target="_blank">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
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
