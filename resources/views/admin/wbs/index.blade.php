@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ url("admin/wbs/add/input_wbs/") }}">
            Tambah Data
        </a>
        <a class="btn btn-primary" target="_blank" href="{{ url("admin/wbs2/rekap_wbs/") }}" data-toogle="modal">
            Rekap Data
        </a> 
    </div>
</div>
<div class="card">
    <div class="card-header">
        WBS
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="wbs_offline" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Registasi</th>
                        <th >Media Penyimpanan</th>
                        <th>Tgl Surat</th>
                        <th>Identitas Pelapor</th>
                        <th>Tgl Terima</th>
                        <th>Perihal</th>
                        <th>Ringkasan Pengaduan</th>
                        <th>Dok Pendukung</th>
                        <th>Jenis Surat</th>
                        <th>Jenis Potensi</th>
                        <th>Jenis Pengaduan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
           <!--     <tbody>
                    <tr>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>sdvsdv</td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ url('admin/wbs2/show') }}">
                                View
                                {{-- {{ trans('global.view') }} --}}
                            </a>
                            <a class="btn btn-xs btn-warning" href="{{ url('admin/wbs2/edit') }}">
                                Edit
                                {{-- {{ trans('global.edit') }} --}}
                            </a>
                            <form action="{{ url('admin/wbs2/destroy') }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                        </td>
                    </tr>
                </tbody> -->
            </table>
        <!-- 
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>
                            No
                        </th>
                        <th>
                            Token
                        </th>
                        <th>
                            NIK Pelapor
                        </th>
                        <th>
                            Nama Pelapor
                        </th>
                        <th>
                            Deskripsi Laporan
                        </th>
                        <th>
                            Nama Terlapor
                        </th>
                        <th>
                            Instansi Terlapor
                        </th>
                        <th>
                            Status Laporan
                        </th>
                        <th>
                            Tanggal Pelaporan
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($wbs as $key => $wbs)
                        <tr>
                            <td>
                            </td>
                            <td>
                                {{ $i++ }}
                            </td>
                            <td>
                                {{ $wbs->token ?? '' }}
                            </td>
                            <td>
                                {{ $wbs->nik_pelapor ?? '' }}
                            </td>
                            <td>
                                {{ $wbs->nama_pelapor ?? '' }}
                            </td>
                            <td>
                                {{ $wbs->uraian_peristiwa ?? '' }}
                            </td>
                            <td>
                                {{ $wbs->nama_terlapor ?? '' }}
                            </td>
                            <td>
                                {{ $wbs->nama_instansi ?? '' }}
                            </td>
                            <td>
                                @if($wbs->status==1)
                                    Belum ditindak
                                @elseif($wbs->status==2)
                                    Ditindak
                                @else
                                    Sudah Memiliki Jawaban
                                @endif
                            </td>
                            <td>
                                {{ Carbon\Carbon::parse($wbs->created_at)->format(' d, F, Y') }}
                                {{-- {{ $wbs->created_at ?? '' }} --}}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.wbs.show', $wbs->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                <a class="btn btn-xs btn-warning" href="{{ route('admin.wbs.edit', $wbs->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                <form action="{{ route('admin.wbs.destroy', $wbs->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        -->
        </div>
        {{-- Form Edit Status --}}
            <div class="modal fade" id="status_ed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    {{-- <form action="{{ url('admin/wbs2/ed_status/') }}" method="POST" enctype="multipart/form-data"> --}}
                    <form id="FormStatus_ed" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label class="col-form-label">Status:</label>
                        {{-- <input type="text" name="nama_pelapor" class="form-control"> --}}
                        <select class="form-control" id="status" name="status" >
                            <option value="Belum Ditindaklanjuti">Belum Ditindaklanjuti</option>
                            <option value="Ditindaklanjuti">Ditindaklanjuti</option>
                        </select>
                        <input type="hidden" name="id" id="id" class="form-control" >
                        <input type="hidden" name="jenis" id="jenis" value="Update Status" class="form-control" >
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
                        <button type="submit" id="save_status_ed" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        {{-- JAJAL --}}
            <div class="modal fade" id="status_ed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    {{-- <form action="{{ url('admin/wbs2/ed_status/') }}" method="POST" enctype="multipart/form-data"> --}}
                   <span>hijoj</span>
                    </div>
                </div>
                </div>
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
@section('scripts_awal')
    <script type="text/javascript">
        // VIew Data (ServerSide)
            $(function () {
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                var table = $('#wbs_offline').DataTable({
                // processing: true,
                serverSide: true,
                info: false,
                ordering: false,
                paging: false,
                bFilter: false,
                ajax: "{{ route('admin.wbs.index') }}",   
                columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'no_regis', name: 'no_regis'},
                        {data: 'media_penyimpan', name: 'media_penyimpan'},
                        {data: 'tgl_lapor', name: 'tgl_lapor'},
                        {data: 'iden_pelapor', name: 'iden_pelapor'},
                        {data: 'tgl_terima_lpr', name: 'tgl_terima_lpr'},
                        {data: 'perihal', name: 'perihal'},
                        {data: 'isi_aduan', name: 'isi_aduan'},
                        {data: 'doc_pendukung', name: 'doc_pendukung'},
                        {data: 'jns_pelapor', name: 'jns_pelapor'},
                        {data: 'jns_potensi', name: 'jns_potensi'},
                        {data: 'pendftrn_aduan', name: 'pendftrn_aduan'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
                });
            });
            // Lihat Token
            // Edit Status
                $(document).on('click','.edit_status',function(event){
                    event.preventDefault();
                    var id = $(this).attr('id'); 
                    // alert(id);
                    var jenis = "Edit Status"
                    var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
                    $.ajax({
                        type: 'post',
                        url: "{{ url('admin/wbs2/ed_status/') }}",
                        data: { _token: CSRF_TOKEN, id: id, jenis: jenis},
                        success: function(data){
                            // console.log('sukses: '+data);
                            $('#status').val(data.result.status);
                            $('#id').val(data.result.id);
                            $('#save_status_ed').val('Update');
                            $('#status_ed').modal('show');
                        }
                    });
                });
            // Update Status
                $('#save_status_ed').click(function (e) {
                    e.preventDefault();
                    var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
                    $(this).html('Mengubah...');
                    $.ajax({
                        type: "POST",
                        url: "{{ url('admin/wbs2/update_status/') }}",
                        data: {
                            id: $('#id').val(),
                            status: $('#status').val(),
                            jenis: $('#jenis').val(),
                            _token: CSRF_TOKEN
                        },
                        dataType: 'json',
                        success: function (data) {
                    
                            $('#FormStatus_ed').trigger("reset");
                            $('#status_ed').modal('hide');
                            $('#save_status_ed').html('Simpan');
                            $('#wbs_offline').DataTable().ajax.reload();
                        
                        },
                        error: function (data) {
                            console.log('Error:', data);
                            $('#save_status_ed').html('Simpan');
                        }
                    });
                }); 
        // Delete record
            $('#wbs_offline').on('click','.Del_wbs',function(){
                var id = $(this).data('id');
                var jenis = "Delete Master WBS"
                var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
                var deleteConfirm = confirm("Apakah Anda Yakin Menghapus Data Ini?");
                if (deleteConfirm == true) {
                    // AJAX request
                    $.ajax({
                    type: 'post',
                    url: "{{ url('admin/wbs2/hapus_wbs_offln/') }}",
                    data: { _token: CSRF_TOKEN, id: id, jenis: jenis},
                    success: function(){
                        alert("Data Dihapus!");
                        // Reload DataTable
                        $('#wbs_offline').DataTable().ajax.reload();
                    }
                    });
                }
            }); 
    </script>
@endsection
