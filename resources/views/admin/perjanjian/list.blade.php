@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

            @if ($sakip['status1']!=1)
                <a class="btn btn-success" href="{{ route('admin.perjanjian.tambah', $sakip->id) }}">
                    <i class="fas fa-fw fa-edit"></i> Tambah Perjanjian
                </a>
                <a class="btn btn-success" href="{{ route('admin.program.tambah', $sakip->id) }}">
                    <i class="fas fa-fw fa-edit"></i> Tambah Program
                </a>
                <a class="btn btn-dark" href="#">
                    <i class="fas fa-fw fa-print"></i> Cetak Perjanjian
                </a>
            @else
                <a class="btn btn-dark" href="#">
                    <i class="fas fa-fw fa-edit"></i> Tambah Perjanjian
                </a>
                <a class="btn btn-dark" href="#">
                    <i class="fas fa-fw fa-edit"></i> Tambah Program
                </a>
                <a class="btn btn-success" href="{{ route('admin.perjanjian.print', $sakip->id) }}" target="_blank">
                    <i class="fas fa-fw fa-print"></i> Cetak Perjanjian
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
        Perjanjian Kinerja
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
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perjanjian as $key => $perjanjian)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $perjanjian['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $perjanjian['sasaran'] }}
                        </td>
                        <td>
                            {{ $perjanjian['indikator_kinerja'] }}
                        </td>
                        <td>
                            {{ $perjanjian['target']." ".$perjanjian['satuan'] }}
                        </td>
                        <td>
                            @can('perjanjian_sakip_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.perjanjian.show', $perjanjian['id']) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('edit_perjanjian_sakip_manage')
                                @if ($sakip['status1']!=1)
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.perjanjian.edit', $perjanjian['id']) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                    <form action="{{ route('admin.perjanjian.destroy', $perjanjian['id']) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endif

                                @endcan
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
        Program Kerja
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
                            Program/Kegiatan
                        </th>
                        <th>
                            Anggaran
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($program as $key => $program)

                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $program['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $program['program'] }}
                        </td>
                        <td>
                            {{ "Rp ".number_format($program['anggaran'],2,',','.') }}
                        </td>
                        <td>
                            @can('perjanjian_sakip_manage')
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.program.show', $program['id']) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan

                            @if ($sakip['status1']!=1)
                                @can('edit_perjanjian_sakip_manage')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.program.edit', $program['id']) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('delete_perjanjian_sakip_manage')
                                <form action="{{ route('admin.program.destroy', $program['id']) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
