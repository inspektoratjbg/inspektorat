@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
       <b> {{ trans('global.edit') }} Berkas Pengaduan Masyarakat </b> <br>
        {{-- Media Penyimpanan :  {{ $wbs->media_penyimpan }} <br> --}}
    </div>
    <div class="card-body">
        <form action="{{ route("admin.wbs.progress") }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="{{ route("admin.wbs.progress", [$wbs->id]) }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-6">
                  <div class="form-group ">
                    <label >Media Penyimpanan <span class="text-danger"><b>*</b></span></label>
                    <select class="form-control" name="media_penyimpan" id="">
                      <option value="">---> Pilih Media Penyimpanan <---</option>
                      <option value="Langsung" {{ $wbs->media_penyimpan == 'Langsung' ? 'selected' : ''}}>Langsung</option>
                      <option value="Tidak Langsung" {{ $wbs->media_penyimpan == 'Tidak Langsung' ? 'selected' : ''}}>Tidak Langsung</option>
                      <option value="Website" {{ $wbs->media_penyimpan == 'Website' ? 'selected' : ''}}>Website</option>
                    </select>
                  </div>
                  <div class="form-group {{ $errors->has('no_lap') ? 'has-error' : '' }}">
                      <label for="no_lap">Nomor Laporan <span class="text-danger"><b>*</b></span></label>
                      <input type="text" name="no_lap" value="{{ $wbs->no_laporan }}" class="form-control"  required>
                      <input type="hidden" name="id_wbs" value="{{ $wbs->id }}" class="form-control"  required>
                  </div>
                  <div class="form-group {{ $errors->has('tgl_lapor') ? 'has-error' : '' }}">
                      <label for="tgl_lapor">Tanggal Laporan <span class="text-danger"><b>*</b></span></label>
                      <input type="date" name="tgl_lapor" value="{{ $wbs->tgl_lapor }}" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('tgl_terima') ? 'has-error' : '' }}">
                      <label for="tgl_terima">Tanggal Penerimaan <span class="text-danger"><b>*</b></span></label>
                      <input type="date" name="tgl_terima" value="{{ $wbs->tgl_terima_lpr }}" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('perihal') ? 'has-error' : '' }}">
                      <label for="perihal">Perihal <span class="text-danger"><b>*</b></span></label>
                      <input type="text" name="perihal" value="{{ $wbs->perihal }}" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('isi_aduan') ? 'has-error' : '' }}">
                      <label for="isi_aduan">Isi Pengaduan <span class="text-danger"><b>*</b></span></label>
                      <textarea name="isi_aduan" class="form-control" cols="30" rows="10">{{ $wbs->isi_aduan }}</textarea>
                  </div>
                  <div class="form-group {{ $errors->has('pendftrn_aduan') ? 'has-error' : '' }}">
                      <label >Pendaftaran Pengaduan <span class="text-danger"><b>*</b></span>
                      <div class="form-check">
                          <input class="form-check-input" {{ $wbs->pendftrn_aduan == 'Dengan Nomor Agenda' ? 'checked' : ''}} value="Dengan Nomor Agenda" type="radio" name="pendftrn_aduan" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Dengan Nomor Agenda (Melalui Sekretariat)</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" {{ $wbs->pendftrn_aduan == 'Tanpa Nomor  Agenda' ? 'checked' : ''}} value="Tanpa Nomor  Agenda" type="radio" name="pendftrn_aduan" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Tanpa Nomor  Agenda (Perintah Langsung Dari Atasan)</label>
                      </div>
                  </div>  
                </div>
                <div class="col-6">
                    <div class="form-group {{ $errors->has('jns_pelapor') ? 'has-error' : '' }}">
                        <label for="jns_pelapor">Jenis Pelaporan <span class="text-danger"><b>*</b></span></label>
                        <select name="jns_pelapor" class="form-control" id="jns_pelapor">
                          <option value="">---> Pilih Jenis Pelaporan <---</option>
                            <option value="Dugaan TPK / Berkadar Pengawasan" {{ $wbs->jns_pelapor == 'Dugaan TPK / Berkadar Pengawasan' ? 'selected' : ''}}>Dugaan TPK / Berkadar Pengawasan</option>
                            <option value="Non Dugaan TPK / Tidak Berkadar Penawasan" {{ $wbs->jns_pelapor == 'Non Dugaan TPK / Tidak Berkadar Penawasan' ? 'selected' : ''}}>Non Dugaan TPK / Tidak Berkadar Penawasan</option>
                            <option value="lain-lain" {{ $wbs->jns_pelapor == 'lain-lain' ? 'selected' : ''}} >--- lain-lain ---</option>
                          </select>
                          {{-- <div class="lain-lain"></div> --}}
                          <div>
                            <label for="jns_pelapor">Jenis Pelaporan <span class=""> <b> (Jika ada yang lain)</b></span></label>
                            <input type="text" class="form-control" name="jns_pelapor_lain" value="{{ $wbs->jns_pelapor_lain }}" placeholder="Masukkan Jenis Pelaporan Lain">
                            {{-- @if ($wbs->jns_pelapor == 'lain-lain')
                            @endif --}}
                          </div>
                    </div>
                    <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                      <label for="no_lap">Jenis Potensi (Penyalahgunaan Wewenang dan atau Kerugian Keuangan Negara Daerah)<span class="text-danger"><b>*</b></span></label>
                      <select name="jns_potensi" class="form-control">
                        <option value="">---> Pilih Jenis Potensi <---</option>
                        <option value="Dugaan PWKKND" {{ $wbs->jns_potensi == 'Dugaan PWKKND' ? 'selected' : ''}}>Dugaan PWKKND</option>
                        <option value="Non Dugaan PWKKND" {{ $wbs->jns_potensi == 'Non Dugaan PWKKND' ? 'selected' : ''}}>Non Dugaan PWKKND</option>
                      </select>                    
                    </div>
                <div class="form-group">
                    <label for="judul_arsip">Daftar Pelapor <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal_ed">Tambah Pelapor</a>
                    {{-- <table class="taxble" > --}}
                    <table class="table" id="pelapor_wbs_ed">
                      <thead>
                        <tr>
                          <th>Nama Pelapor</th>
                          <th>Foto Tanda Pengenal</th>
                          <th>Tanda Pengenal / SIM / NIK</th>
                          <th>No. Tanda Pengenal / NIK / No. SIM</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       </tbody>
                    </table>
                    {{-- <input type="date" name="tgl_lapor" class="form-control" required> --}}
                </div>
                <div class="form-group ">
                    <label >Dokumen Pendukung <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal2_ed">Tambah Dokumen</a>
                    <table class="table" id="dokumen_jsonwbs_ed">
                    {{-- <table class="table" id="dokumen_jsonwbs_ed"> --}}
                      <thead>
                        <tr>
                          <th>File Dokumen Pendukung</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                      </tbody>
                    </table>
                </div>
                <div class="form-group ">
                    <label >Nama Terlapor <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal3_ed">Tambah Terlapor</a>
                    <table class="table " id="trlpor_jsonwbs_ed">
                      <thead>
                        <tr>
                          <th>Nama Terlapor</th>
                          <th>NIK</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>Instansi</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> </tbody>
                    </table>
                </div>
                {{-- <div class="form-group ">
                  <label >Nama Tim Auditor <span class="text-danger"><b>*</b></span></label>
                  <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal4_ed">Tambah Auditor</a>
                  <table class="table " id="timaudit_json_ed">
                    <thead>
                      <tr>
                        <th>Nama Auditor</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody> </tbody>
                  </table>
              </div> --}}
                <div class="form-group ">
                    <h5>Informasi Tambahan</h5>
                    <div class="row">
                      <div class="col-5">
                        <label for="wkt_mulai">Lokasi Kejadian</label>
                        <input type="text" value="{{ $wbs->lok_kejadian }}" name="wkt_mulai" class="form-control" required>
                      </div>
                      <div class="col-4">
                        <label for="wkt_selsai">Waktu Kejadian</label>
                        <input type="time" value="{{ $wbs->wkt_kejadian }}" name="wkt_selsai" class="form-control" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="judul_arsip">Catatan Petugas </label>
                  <textarea name="ctt_petugas" id="" class="form-control" cols="30" rows="5">{{ $wbs->ctt_petugas }}</textarea>
                </div>
              </div>
            </div>
              
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">

                <input type="hidden" id="updated_by" name="updated_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div>
                <a class="btn btn-danger" href="{{ url('admin/wbs') }}">Back</a>
                <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
        {{-- Form Tambah Nama Perlapor --}}
        <div class="modal fade" id="exampleModal_ed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Nama Pelapor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="productForm_ed" method="POST" enctype="multipart/form-data" name="productForm">
                    @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nama Pelapor:</label>
                      <input type="text" name="nama_pelapor" class="form-control" id="Nama-Pelapor">
                      <input type="hidden" name="no_regis" class="form-control" value="{{ $wbs->no_regis }}">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Tanda Pengenal / NIK / SIM:</label>
                      <input type="text" name="tanda_pengenal" class="form-control" id="tanda-pengenal">
                      {{-- <input type="text" name="tanda_pengenal" class="form-control" id="tanda-pengenal"> --}}
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Foto Tanda Pengenal:</label>
                      <input type="file" name="foto_tnd_pengenal" class="form-control" id="tanda-pengenal">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">No. Tanda Pengenal / NIK / No. SIM:</label>
                      <input type="number" name="no_tnd_pengenal" class="form-control" id="no-ttd-pengenal">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" id="saveBtn" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        {{-- Form Tambah Data Dokumen Pendukung --}}
        <div class="modal fade" id="exampleModal2_ed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen Pendukung</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="productForm2_ed" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Upload Dokumen Pendukung:</label>
                      <input type="file" name="jns_doc" class="form-control" >
                      <input type="hidden" name="no_regis" class="form-control" value="{{ $wbs->no_regis }}">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" id="saveBtn_doc" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
              </div>
            </div>
        </div>
        {{-- Form Tambah Data Terlapor --}}
        <div class="modal fade" id="exampleModal3_ed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Terlapor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="productForm3_ed" method="POST" enctype="multipart/form-data" name="productForm3">
                  @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Terlapor :</label>
                    <input type="text" name="nama_trlpor" class="form-control" >
                    <input type="hidden" name="no_regis" class="form-control" value="{{ $wbs->no_regis }}">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">NIK :</label>
                    <input type="number" name="nik" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Alamat :</label>
                    <input type="text" name="alamat" class="form-control" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Jabatan :</label>
                    <input type="text" name="jabatan" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Asal Instansi :</label>
                    <input type="text" name="instansi" class="form-control" >
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="saveBtn_trlpor_ed" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {{-- Form Tambah Data Terlapor --}}
        <div class="modal fade" id="exampleModal4_ed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tim Auditor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="productForm4_ed" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Auditor :</label>
                    {{-- <input type="text" name="nama_auditor" class="form-control" > --}}
                    <select class="form-control" name="nama_auditor" id="">
                      <option value="">---> Pilih Pegawai <---</option>
                      @foreach ($pgw as $p)
                        <option value="{{ $p->nip }}">{{ $p->nama_pegawai }}</option>
                      @endforeach
                    </select>
                    <input type="hidden" name="no_regis" class="form-control" value="{{ $wbs->no_regis }}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="saveBtn_timaudit_ed" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>
@endsection
@section('scripts_awal')
  <script type="text/javascript">
    $('#jns_pelapor').on('change',function(){
      var some = $(this).find('option:selected').val();
      if (some == 'lain-lain') {
        $('.lain-lain').append('<br> <input type="text" class="form-control" name="jns_pelapor_lain" value="" placeholder="Masukkan Jenis Pelaporan Lain">');
        // console.log('berhasil');
      }
    }); 
  </script>
    <script type="text/javascript">
        // VIew Data (ServerSide)
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#pelapor_wbs_ed').DataTable({
            // processing: true,
            serverSide: true,
            info: false,
            ordering: false,
            paging: false,
            bFilter: false,
            // ajax: "{{url('admin/wbs/add/input_wbs/') }}",   
            ajax: "{{route('admin.wbs.edit',"$idwbs" ) }}",   
            columns: [
                    {data: 'nama_pelapor', name: 'nama_pelapor'},
                    {data: 'foto_tnd_pngenal', name: 'foto_tnd_pngenal'},
                    {data: 'tanda_pengenal', name: 'tanda_pengenal'},
                    {data: 'no_tnd_pengenal', name: 'no_tnd_pengenal'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
            });
        });
        //Input Data Modal Pelapor
        $('#productForm_ed').submit(function (e) {
          e.preventDefault();
          var formdata = new FormData(this);
          $('#saveBtn').text('Menambahkan...');
          $.ajax({
              type: "POST",
              url: "{{ url('admin/wbs2/tambah_pelapor/') }}",
              data: formdata,
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              success: function (response) {
          
                  $('#productForm_ed').trigger("reset");
                  $('#exampleModal_ed').modal('hide');
                  $('#saveBtn').html('Simpan');
                  $('#pelapor_wbs_ed').DataTable().ajax.reload();
              
              },
              error: function (response) {
                  console.log('Error:', data);
                  $('#saveBtn').html('Simpan');
              }
          });
      });  
        // Delete record
        $('#pelapor_wbs_ed').on('click','.BtnDelete_ed',function(){
            var id = $(this).data('id');
            var jenis = "Nama Pelapor";
            var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
            var deleteConfirm = confirm("Apakah Anda Yakin Menghapus Data Ini?");
            if (deleteConfirm == true) {
                // AJAX request
                $.ajax({
                type: 'post',
                url: "{{ url('admin/wbs2/hapus_pelpor_docPend/') }}",
                data: { _token: CSRF_TOKEN, id: id, jenis: jenis},
                success: function(){
                    alert("Data Dihapus!");
                    // Reload DataTable
                    $('#pelapor_wbs_ed').DataTable().ajax.reload();
                }
                });
            }
        });
    </script>
    <script type="text/javascript">
        //View Data Dokumen Pendukung (Serverside)
        $(function () {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var table = $('#dokumen_jsonwbs_ed').DataTable({
              // processing: true,
              serverSide: true,
              info: false,
              ordering: false,
              paging: false,
              bFilter: false,
              ajax: "{{url('admin/wbs2/show_json_docwbs_ed/'.$wbs->no_regis) }}",
              columns: [
                      {data: 'jenis_file', name: 'jenis_file'},
                      {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
          });
        });
        //Input Data Dokumen Pendukung
        $('#productForm2_ed').submit(function (e) {
          e.preventDefault();
          var formdata = new FormData(this);
          $('#saveBtn_doc').text('Menambahkan...');
          $.ajax({
              type: "POST",
              url: "{{ url('admin/wbs2/tambah_doc_pend/') }}",
              data: formdata,
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              success: function (response) {
          
                  $('#productForm2_ed').trigger("reset");
                  $('#exampleModal2_ed').modal('hide');
                  $('#saveBtn_doc').html('Simpan');
                  $('#dokumen_jsonwbs_ed').DataTable().ajax.reload();
              
              },
              error: function (response) {
                  console.log('Error:', data);
                  $('#saveBtn_doc').html('Simpan');
              }
          });
        }); 
        // Delete record
        $('#dokumen_jsonwbs_ed').on('click','.BtnDeleteDoc_ed',function(){
          var id = $(this).data('id');
          var jenis = "Doc Pendukung";
          var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
          var deleteConfirm = confirm("Apakah Anda Yakin Menghapus Data Ini?");
          if (deleteConfirm == true) {
              // AJAX request
              $.ajax({
                type: 'post',
                url: "{{ url('admin/wbs2/hapus_pelpor_docPend/') }}",
                data: { _token: CSRF_TOKEN, id: id, jenis: jenis},
                success: function(){
                  alert("Data Dihapus!");
                  // Reload DataTable
                  $('#dokumen_jsonwbs_ed').DataTable().ajax.reload();
                }
              });
          }
        }); 
    </script>
    <script type="text/javascript">
        //View Data Nama Terlapor (Serverside)
        $(function () {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var table = $('#trlpor_jsonwbs_ed').DataTable({
              // processing: true,
              serverSide: true,
              info: false,
              ordering: false,
              paging: false,
              bFilter: false,
              ajax: "{{url('admin/wbs2/show_trlpor_wbs_ed/'.$wbs->no_regis) }}",
              columns: [
                    {data: 'nama_terlapor', name: 'nama_terlapor'},
                    {data: 'nik', name: 'nik'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'jabatan', name: 'jabatan'},
                    {data: 'instansi', name: 'instansi'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
          });
        });
        //Input Data Dokumen Pendukung
      $('#saveBtn_trlpor_ed').click(function (e) {
          e.preventDefault();
          $(this).html('Sending..');
        
          $.ajax({
              type: "POST",
              url: "{{ url('admin/wbs2/tambah_trlpor/') }}",
              data: $('#productForm3_ed').serialize(),
              dataType: 'json',
              success: function (data) {
          
                  $('#productForm3_ed').trigger("reset");
                  $('#exampleModal3_ed').modal('hide');
                  $('#saveBtn_trlpor_ed').html('Save Changes');
                  $('#trlpor_jsonwbs_ed').DataTable().ajax.reload();

              
              },
              error: function (data) {
                  console.log('Error:', data);
                  $('#saveBtn_trlpor_ed').html('Simpan');
              }
          });
      }); 
        // Delete record
        $('#trlpor_jsonwbs_ed').on('click','.BtnDelTrlpor_ed',function(){
          var id = $(this).data('id');
          var jenis = "Nama Terlapor";
          var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
          var deleteConfirm = confirm("Apakah Anda Yakin Menghapus Data Ini?");
          if (deleteConfirm == true) {
              // AJAX request
              $.ajax({
                type: 'post',
                url: "{{ url('admin/wbs2/hapus_pelpor_docPend/') }}",
                data: { _token: CSRF_TOKEN, id: id, jenis: jenis},
                success: function(){
                  alert("Data Dihapus!");
                  // Reload DataTable
                  $('#trlpor_jsonwbs_ed').DataTable().ajax.reload();
                }
              });
          }
        }); 
    </script>
    <script type="text/javascript">
        //View Data Tim Auditor (Serverside)
        $(function () {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var table = $('#timaudit_json_ed').DataTable({
              // processing: true,
              serverSide: true,
              info: false,
              ordering: false,
              paging: false,
              bFilter: false,
              ajax: "{{url('admin/wbs2/show_TimAuditor_wbs/'.$wbs->no_regis) }}",
              columns: [
                    {data: 'nama_pegawai', name: 'nama_pegawai'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
          });
        });
        //Input Data Dokumen Pendukung
      $('#saveBtn_timaudit_ed').click(function (e) {
          e.preventDefault();
          $(this).html('Menambahkan...');
        
          $.ajax({
              type: "POST",
              url: "{{ url('admin/wbs2/tambah_TmAuditor/') }}",
              data: $('#productForm4_ed').serialize(),
              dataType: 'json',
              success: function (data) {
          
                  $('#productForm4_ed').trigger("reset");
                  $('#exampleModal4_ed').modal('hide');
                  $('#saveBtn_timaudit_ed').html('Save Changes');
                  $('#timaudit_json_ed').DataTable().ajax.reload();
              },
              error: function (data) {
                  console.log('Error:', data);
                  $('#saveBtn_timaudit_ed').html('Simpan');
              }
          });
      }); 
        // Delete record
        $('#timaudit_json_ed').on('click','.BtnDel_TmAuditor',function(){
          var id = $(this).data('id');
          var jenis = "Tim Auditor";
          var CSRF_TOKEN = $("meta[name='csrf-token']").attr("content");
          var deleteConfirm = confirm("Apakah Anda Yakin Menghapus Data Ini?");
          if (deleteConfirm == true) {
              // AJAX request
              $.ajax({
                type: 'post',
                url: "{{ url('admin/wbs2/hapus_pelpor_docPend/') }}",
                data: { _token: CSRF_TOKEN, id: id, jenis: jenis},
                success: function(){
                  alert("Data Dihapus!");
                  // Reload DataTable
                  $('#timaudit_json_ed').DataTable().ajax.reload();
                }
              });
          }
        }); 
    </script>
@endsection