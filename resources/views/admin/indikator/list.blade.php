@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            @if ($sakip['status2']==1)
                <a class="btn btn-dark" href="#">
                    <i class="fas fa-fw fa-edit"></i> Tambah Tupoksi
                </a>
                <a class="btn btn-success" href="{{ route('admin.indikator.print', $sakip->id) }}" target="_blank">
                    <i class="fas fa-fw fa-print"></i> Cetak Indikator
                </a>
            @else
                <a class="btn btn-success" href="{{ route('admin.tupoksi.tambah', $sakip->id) }}">
                    <i class="fas fa-fw fa-edit"></i> Tambah Tupoksi
                </a>
                <a class="btn btn-dark" href="#">
                    <i class="fas fa-fw fa-print"></i> Cetak Indikator
                </a>
            @endif
            <a class="btn btn-warning" href="{{ route('admin.sakip.index') }}">
                Kembali
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Indikator
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
                            Kinerja
                        </th>
                        <th>
                            Indikator Kinerja
                        </th>
                        <th>
                            Formulasi Perhitungan
                        </th>
                        <th>
                            Sumber Data
                        </th>
                        <th>
                            Penanggung Jawab
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($indikator as $key => $indikator)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $indikator['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $indikator['sasaran'] }}
                        </td>
                        <td>
                            {{ $indikator['indikator_kinerja'] }}
                        </td>
                        <td>
                            {{ $indikator['formulasi'] }}
                        </td>
                        <td>
                            {{ $indikator['sumber_data'] }}
                        </td>
                        <td>
                            {{ $indikator['penanggung_jawab'] }}
                        </td>
                        <td>
                            @can('indikator_sakip_manage')
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.indikator.show', $indikator['id']) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan


                            @if ($sakip['status2']!=1)
                            @can('progress_indikator_sakip_manage')
                                <a class="btn btn-xs btn-danger" href="{{ route('admin.indikator.edit', $indikator['id']) }}">
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
        tupoksi Kerja
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
                            Tupoksi
                        </th>
                        <th>
                            Tipe Tupoksi
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tupoksi as $key => $tupoksi)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $tupoksi['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $tupoksi['indikator'] }}
                        </td>
                        <td>
                            @if ($tupoksi['tipe_indikator']==2)
                              Fungsi
                            @else
                              Tugas Pokok
                            @endif
                        </td>
                        <td>
                            @can('perjanjian_sakip_manage')
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.tupoksi.show', $tupoksi['id']) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan
                            @if ($sakip['status2']!=1)
                                @can('edit_perjanjian_sakip_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.tupoksi.edit', $tupoksi['id']) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('delete_perjanjian_sakip_manage')
                                <form action="{{ route('admin.tupoksi.destroy', $tupoksi['id']) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
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
