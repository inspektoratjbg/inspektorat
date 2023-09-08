@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.absensi.create') }}">
                Tambah Absensi
            </a>
            <!-- <a class="btn btn-warning" data-toggle="modal" data-target="#importExcel">
                Import CSV
            </a> -->

        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Data absensi
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
                            NIP
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Jam
                        </th>
                        <th>
                            Lampiran
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($absensi as $key => $absensi)
                        <tr data-entry-id="{{ $absensi->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $i++ }}
                            </td>
                            <td>
                                {{ $absensi->nip ?? '' }}
                            </td>
                            <td>
                                Nama : {{ $absensi->nama ?? '' }} <br>
                                Pimpinan : {{ $absensi->nip_atasan ?? '' }}
                            </td>
                            <td>
                                {{ $absensi->tanggal ?? '' }}
                            </td>
                            <td>
                                {{ $absensi->jam ?? '' }}
                            </td>
                            <td align="center">
                                <a href="{{ url('/upload/absensi/'.$absensi->lampiran) }}" target="_blank"><i class="fa fa-download"></i></a><br>
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.absensi.show', $absensi->id) }}"><i class="fa fa-eye"></i>
                                </a>
                                @endcan
                                @can('absensi_edit_manage')
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.absensi.edit', $absensi->id) }}"><i class="fa fa-edit"></i>
                                </a>
                                @endcan
                                @can('absensi_delete_manage')
                                <form action="{{ route('admin.absensi.destroy', $absensi->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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

@include('sweetalert::alert')
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

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
