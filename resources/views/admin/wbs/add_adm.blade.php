@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
     <b> Registasi Berkas Pengaduan Masyarakat </b> <br>
    </div>

    <div class="card-body">
        <form action="{{ url("admin/wbs2/store_wbs_offln") }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                <div class="col-6">
                  <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                      <label for="no_lap">Media Penyimpanan <span class="text-danger"><b>*</b></span></label>
                      <select class="form-control" name="media_penyimpan" id="">
                        <option value="">---> Pilih Media Penyimpanan <---</option>
                        <option value="Langsung">Langsung</option>
                        <option value="Tidak Langsung">Tidak Langsung</option>
                      </select>
                      <input type="hidden" name="no_regis" class="form-control" value="{{ $IdGenerate }}">
                  </div>
                  <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                      <label for="no_lap">Nomor Laporan <span class="text-danger"><b>*</b></span></label>
                      <input type="text" name="no_lap" class="form-control"  required>
                  </div>
                  <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                      <label for="judul_arsip">Tanggal Laporan <span class="text-danger"><b>*</b></span></label>
                      <input type="date" name="tgl_lapor" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                      <label for="judul_arsip">Tanggal Penerimaan <span class="text-danger"><b>*</b></span></label>
                      <input type="date" name="tgl_terima" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                      <label for="judul_arsip">Perihal <span class="text-danger"><b>*</b></span></label>
                      <input type="text" name="perihal" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                      <label for="judul_arsip">Isi Pengaduan <span class="text-danger"><b>*</b></span></label>
                      <textarea name="isi_aduan" id="" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                      <label >Pendaftaran Pengaduan <span class="text-danger"><b>*</b></span>
                      <div class="form-check">
                          <input class="form-check-input" value="Dengan Nomor Agenda" type="radio" name="pendftrn_aduan" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Dengan Nomor Agenda (Melalui Sekretariat)</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" value="Tanpa Nomor  Agenda" type="radio" name="pendftrn_aduan" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Tanpa Nomor  Agenda (Perintah Langsung Dari Atasan)</label>
                      </div>
                  </div>  
                </div>
                <div class="col-6">
                  <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                    <label for="no_lap">Jenis Pelaporan <span class="text-danger"><b>*</b></span></label>
                    <select name="jns_pelapor" class="form-control" id="jns_pelapor">
                      <option value="">---> Pilih Jenis Pelaporan <---</option>
                      <option value="Dugaan TPK / Berkadar Pengawasan">Dugaan TPK / Berkadar Pengawasan</option>
                      <option value="Non Dugaan TPK / Tidak Berkadar Penawasan">Non Dugaan TPK / Tidak Berkadar Penawasan</option>
                      <option value="lain-lain">-- lain lain --</option>
                    </select>
                    <div class="lain-lain"></div>
                    {{-- <div><input type="text" class="form-control" name="jns_pelapor" placeholder="Masukkan Jenis Pelaporan Lain"></div> --}}
                    
                </div>
                  <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                    <label for="no_lap">Jenis Potensi (Penyalahgunaan Wewenang dan atau Kerugian Keuangan Negara Daerah)<span class="text-danger"><b>*</b></span></label>
                    <select name="jns_potensi" class="form-control" id="jns_potensi">
                      <option value="">---> Pilih Jenis Potensi <---</option>
                      <option value="Dugaan PWKKND">Dugaan PWKKND</option>
                      <option value="Non Dugaan PWKKND">Non Dugaan PWKKND</option>
                    </select>                    
                  </div>
                <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                    <label for="judul_arsip">Daftar Pelapor <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Pelapor</a>
                    <table class="table" id="pelapor_wbs">
                      <thead>
                        <tr>
                          <th>Nama Pelapor</th>
                          <th>Foto Tanda Pengenal</th>
                          <th>Tanda Pengenal / NIK / SIM</th>
                          <th>No. Tanda Pengenal / NIK / No. SIM</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                    {{-- <input type="date" name="tgl_lapor" class="form-control" required> --}}
                </div>
                <div class="form-group ">
                    <label >Dokumen Pendukung <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal2">Tambah Dokumen</a>
                    <table class="table " id="dokumen_jsonwbs">
                      <thead>
                        <tr>
                          <th>File Dokumen Pendukung</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> </tbody>
                    </table>
                </div>
                <div class="form-group ">
                    <label >Nama Terlapor <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal3">Tambah Terlapor</a>
                    <table class="table " id="terlapor_jsonwbs">
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
                    <label >Tim Auditor <span class="text-danger"><b>*</b></span></label>
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal4">Tambah Tim</a>
                    <table class="table " id="auditor_jsonwbs">
                      <thead>
                        <tr>
                          <th>Nama Auditor</th>
                          <th>Peran Auditor</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> </tbody>
                    </table>
                </div> --}}
                <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                    <h5>Informasi Tambahan</h5>
                    <div class="row">
                      <div class="col-5">
                        <label for="judul_arsip">Lokasi Kejadian (Detail)</label>
                        <input type="text" name="lok_kejadian" class="form-control" required>
                      </div>
                      <div class="col-4">
                        <label for="judul_arsip">Waktu Kejadian</label>
                        <input type="time" name="wkt_kejadian" class="form-control" required>
                      </div>
                      {{-- </div>
                      <div class="col-4">
                        <label for="judul_arsip">Waktu Selesai</label>
                        <input type="time" name="wkt_selsai" class="form-control" required>
                      </div> --}}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                  <label for="judul_arsip">Catatan Petugas </label>
                  <textarea name="ctt_petugas" id="" class="form-control" cols="30" rows="5"></textarea>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelapor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="productForm" method="POST" enctype="multipart/form-data" name="productForm">
                  @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Pelapor:</label>
                    <input type="text" name="nama_pelapor" class="form-control" id="Nama-Pelapor">
                    <input type="hidden" name="no_regis" class="form-control" value="{{ $IdGenerate }}">
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
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen Pendukung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="productForm2" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Upload Dokumen Pendukung:</label>
                    <input type="file" name="jns_doc" class="form-control" >
                    <input type="hidden" name="no_regis" class="form-control" value="{{ $IdGenerate }}">
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
        {{-- Form Tambah Nama Terlapor --}}
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Terlapor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="productForm3" method="POST" enctype="multipart/form-data" name="productForm3">
                  @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Terlapor :</label>
                    <input type="text" name="nama_trlpor" class="form-control" >
                    <input type="hidden" name="no_regis" class="form-control" value="{{ $IdGenerate }}">
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
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="saveBtn_trlpor" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        {{-- Form Tambah Tim Auditor --}}
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tim Auditor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="productForm4" method="POST" enctype="multipart/form-data" name="productForm3">
                  @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Auditor :</label>
                    <select class="form-control" name="nama_auditor" id="">
                      <option value="">---> Pilih Pegawai <---</option>
                      @foreach ($pgw as $p)
                        <option value="{{ $p->nip }}">{{ $p->nama_pegawai }}</option>
                          
                      @endforeach
                    </select>
                    {{-- <input type="text" name="nama_auditor" class="form-control" > --}}
                    <input type="hidden" name="no_regis" class="form-control" value="{{ $IdGenerate }}">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama Auditor :</label>
                    <select class="form-control" name="peran_auditor" id="">
                      <option value="">---> Pilih Pegawai <---</option>
                        <option value="PJP (Penanggungjawab Pembantu)">PJP (Penanggungjawab Pembantu)</option>
                        <option value="PT (Pengendali Teknis)">PT (Pengendali Teknis)</option>
                        <option value="KT (Ketua Tim)">KT (Ketua Tim)</option>
                        <option value="AT (Anggota Tim)">AT (Anggota Tim)</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="saveBtn_TmAudit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
 
      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }
 
      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };
 
  tinymce.init(editor_config);
</script>

@endsection
@section('scripts_awal')
  <script type="text/javascript">
    $('#jns_pelapor').on('change',function(){
      var some = $(this).find('option:selected').val();
      if (some == 'lain-lain') {
        $('.lain-lain').append('<br> <input type="text" class="form-control" name="jns_pelapor_lain" placeholder="Masukkan Jenis Pelaporan Lain">');
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
          var table = $('#pelapor_wbs').DataTable({
          // processing: true,
          serverSide: true,
          info: false,
          ordering: false,
          paging: false,
          bFilter: false,
          ajax: "{{url('admin/wbs/add/input_wbs/') }}",   
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
      $('#productForm').submit(function (e) {
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
          
                  $('#productForm').trigger("reset");
                  $('#exampleModal').modal('hide');
                  $('#saveBtn').html('Simpan');
                  $('#pelapor_wbs').DataTable().ajax.reload();
              
              },
              error: function (response) {
                  console.log('Error:', data);
                  $('#saveBtn').html('Simpan');
              }
          });
      }); 
      // $('#saveBtn').click(function (e) {
      //   e.preventDefault();
      //   $(this).html('Sending..');
      
      //   $.ajax({
      //       type: "POST",
      //       url: "{{ url('admin/wbs2/tambah_pelapor/') }}",
      //       data: $('#productForm').serialize(),
      //       dataType: 'json',
      //       success: function (data) {
        
      //           $('#productForm').trigger("reset");
      //           $('#exampleModal').modal('hide');
      //           $('#saveBtn').html('Simpan');
      //           $('#pelapor_wbs').DataTable().ajax.reload();
            
      //       },
      //       error: function (data) {
      //           console.log('Error:', data);
      //           $('#saveBtn').html('Simpan');
      //       }
      //   });
      // });  
      // Delete record
      $('#pelapor_wbs').on('click','.BtnDelete',function(){
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
                $('#pelapor_wbs').DataTable().ajax.reload();
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
        var table = $('#dokumen_jsonwbs').DataTable({
            // processing: true,
            serverSide: true,
            info: false,
            ordering: false,
            paging: false,
            bFilter: false,
            ajax: "{{url('admin/wbs2/show_json_docwbs/".$IdGenerate"') }}",   
            columns: [
                    {data: 'doc_wbs', name: 'doc_wbs'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
      });
      //Input Data Dokumen Pendukung
      $('#productForm2').submit(function (e) {
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
          
                  $('#productForm2').trigger("reset");
                  $('#exampleModal2').modal('hide');
                  $('#saveBtn_doc').html('Simpan');
                  $('#dokumen_jsonwbs').DataTable().ajax.reload();
              
              },
              error: function (response) {
                  console.log('Error:', data);
                  $('#saveBtn_doc').html('Simpan');
              }
          });
      }); 
      // Delete record
      $('#dokumen_jsonwbs').on('click','.BtnDeleteDoc',function(){
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
                $('#dokumen_jsonwbs').DataTable().ajax.reload();
              }
            });
        }
      }); 
  </script>
  <script type="text/javascript">
      //View Data Terlapor (Serverside)
      $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('#terlapor_jsonwbs').DataTable({
            // processing: true,
            serverSide: true,
            info: false,
            ordering: false,
            paging: false,
            bFilter: false,
            ajax: "{{url('admin/wbs2/show_terlapor_wbs/".$IdGenerate"') }}",   
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
      $('#saveBtn_trlpor').click(function (e) {
          e.preventDefault();
          $(this).html('Menambahkan...');
        
          $.ajax({
              type: "POST",
              url: "{{ url('admin/wbs2/tambah_trlpor/') }}",
              data: $('#productForm3').serialize(),
              dataType: 'json',
              success: function (data) {
          
                  $('#productForm3').trigger("reset");
                  $('#exampleModal3').modal('hide');
                  $('#saveBtn_trlpor').html('Simpan');
                  $('#terlapor_jsonwbs').DataTable().ajax.reload();
              
              },
              error: function (data) {
                  console.log('Error:', data);
                  $('#saveBtn_trlpor').html('Save Changes');
              }
          });
      }); 
      // Delete record
      $('#terlapor_jsonwbs').on('click','.BtnDel_trlpor',function(){
        var id = $(this).data('id');
        var jenis = "Nama Terlapor"
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
                $('#terlapor_jsonwbs').DataTable().ajax.reload();
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
        var table = $('#auditor_jsonwbs').DataTable({
            // processing: true,
            serverSide: true,
            info: false,
            ordering: false,
            paging: false,
            bFilter: false,
            ajax: "{{url('admin/wbs2/show_TimAuditor_wbs/'.$IdGenerate) }}",   
            columns: [
                    {data: 'nama_pegawai', name: 'nama_pegawai'},
                    {data: 'peran_auditor', name: 'peran_auditor'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
      });
      //Input Data Dokumen Pendukung
      $('#saveBtn_TmAudit').click(function (e) {
          e.preventDefault();
          $(this).html('Menambahkan...');
        
          $.ajax({
              type: "POST",
              url: "{{ url('admin/wbs2/tambah_TmAuditor/') }}",
              data: $('#productForm4').serialize(),
              dataType: 'json',
              success: function (data) {
          
                  $('#productForm4').trigger("reset");
                  $('#exampleModal4').modal('hide');
                  $('#saveBtn_TmAudit').html('Simpan');
                  $('#auditor_jsonwbs').DataTable().ajax.reload();
              
              },
              error: function (data) {
                  console.log('Error:', data);
                  $('#saveBtn_TmAudit').html('Save Changes');
              }
          });
      }); 
      // Delete record
      $('#auditor_jsonwbs').on('click','.BtnDel_TmAuditor',function(){
        var id = $(this).data('id');
        var jenis = "Tim Auditor"
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
                $('#auditor_jsonwbs').DataTable().ajax.reload();
              }
            });
        }
      }); 
  </script>
@endsection