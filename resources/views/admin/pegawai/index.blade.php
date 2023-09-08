@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.pegawai.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.pegawai.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pegawai.title_singular') }} {{ trans('global.list') }}
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
                            NIP
                        </th>
                        <th>
                            Nama Pegawai
                        </th>
                        <th>
                            Divisi Pegawai
                        </th>
                        <th>
                            Jabatan
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($pegawai as $key => $pegawai)
                        <tr data-entry-id="{{ $pegawai->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $pegawai->nip ?? '' }}
                            </td>
                            <td>
                                {{ $pegawai->nama_pegawai ?? '' }}
                            </td>
                            <td>
                                {{ $pegawai->status_kepegawaiaan ?? '' }}
                            </td>
                            <td>
                                {{ $pegawai->nama_jabatan ?? '' }}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.pegawai.show', $pegawai->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('edit_pegawai_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.pegawai.edit', $pegawai->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('delete_pegawai_manage')
                                <form action="{{ route('admin.pegawai.destroy', $pegawai->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
