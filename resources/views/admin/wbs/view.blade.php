@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
       <b>Detail Berkas Pengaduan Masyarakat </b> <br>
        {{-- Media Penyimpanan : {{ $wbs->media_penyimpan }} <br> --}}
    </div>
    <div class="card-body">
        <form action="{{ route("admin.wbs.progress") }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="{{ route("admin.wbs.progress", [$wbs->id]) }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-6">
                <div class="form-group ">
                    <label >Media Penyimpanan *</label>
                    <select class="form-control" disabled name="media_penyimpan" id="">
                        <option value="">---> Pilih Media Penyimpanan <---</option>
                        <option value="Langsung" {{ $wbs->media_penyimpan == 'Langsung' ? 'selected' : ''}}>Langsung</option>
                        <option value="Tidak Langsung" {{ $wbs->media_penyimpan == 'Tidak Langsung' ? 'selected' : ''}}>Tidak Langsung</option>
                    </select>
                    </div>
                  <div class="form-group {{ $errors->has('no_lap') ? 'has-error' : '' }}">
                      <label for="no_lap">Nomor Laporan *</label>
                      <input type="text" disabled name="no_lap" value="{{ $wbs->no_laporan }}" class="form-control"  required>
                      <input type="hidden" name="id_wbs" value="{{ $wbs->id }}" class="form-control"  required>
                  </div>
                  <div class="form-group {{ $errors->has('tgl_lapor') ? 'has-error' : '' }}">
                      <label for="tgl_lapor">Tanggal Laporan *</label>
                      <input type="date" disabled name="tgl_lapor" value="{{ $wbs->tgl_lapor }}" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('tgl_terima') ? 'has-error' : '' }}">
                      <label for="tgl_terima">Tanggal Penerimaan *</label>
                      <input type="date" disabled name="tgl_terima" value="{{ $wbs->tgl_terima_lpr }}" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('perihal') ? 'has-error' : '' }}">
                      <label for="perihal">Perihal *</label>
                      <input type="text" disabled name="perihal" value="{{ $wbs->perihal }}" class="form-control" required>
                  </div>
                  <div class="form-group {{ $errors->has('isi_aduan') ? 'has-error' : '' }}">
                      <label for="isi_aduan">Isi Pengaduan *</label>
                      <textarea disabled name="isi_aduan" class="form-control" cols="30" rows="10">{{ $wbs->isi_aduan }}</textarea>
                  </div>
                  <div class="form-group {{ $errors->has('pendftrn_aduan') ? 'has-error' : '' }}">
                      <label >Pendaftaran Pengaduan *
                      <div class="form-check">
                          <input class="form-check-input" disabled {{ $wbs->pendftrn_aduan == 'Dengan Nomor Agenda' ? 'checked' : ''}} value="Dengan Nomor Agenda" type="radio" name="pendftrn_aduan" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Dengan Nomor Agenda (Melalui Sekretariat)</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" disabled {{ $wbs->pendftrn_aduan == 'Tanpa Nomor  Agenda' ? 'checked' : ''}} value="Tanpa Nomor  Agenda" type="radio" name="pendftrn_aduan" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Tanpa Nomor  Agenda (Perintah Langsung Dari Atasan)</label>
                      </div>
                  </div>  
                </div>
                <div class="col-6">
                    <div class="form-group {{ $errors->has('jns_pelapor') ? 'has-error' : '' }}">
                        <label for="jns_pelapor">Jenis Pelaporan *</label>
                        <select disabled name="jns_pelapor" class="form-control" id="">
                            <option value="">---> Pilih Jenis Pelaporan <---</option>
                            <option value="Dugaan TPK / Berkadar Pengawasan" {{ $wbs->jns_pelapor == 'Dugaan TPK / Berkadar Pengawasan' ? 'selected' : ''}}>Dugaan TPK / Berkadar Pengawasan</option>
                            <option value="Non Dugaan TPK / Tidak Berkadar Penawasan" {{ $wbs->jns_pelapor == 'Non Dugaan TPK / Tidak Berkadar Penawasan' ? 'selected' : ''}}>Non Dugaan TPK / Tidak Berkadar Penawasan</option>
                        </select>
                    </div>
                    <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                        <label for="no_lap">Jenis Potensi (Penyalahgunaan Wewenang dan atau Kerugian Keuangan Negara Daerah)<span class="text-danger"><b>*</b></span></label>
                        <select disabled name="jns_potensi" class="form-control">
                          <option value="">---> Pilih Jenis Potensi <---</option>
                          <option value="Dugaan PWKKND" {{ $wbs->jns_potensi == 'Dugaan PWKKND' ? 'selected' : ''}}>Dugaan PWKKND</option>
                          <option value="Non Dugaan PWKKND" {{ $wbs->jns_potensi == 'Non Dugaan PWKKND' ? 'selected' : ''}}>Non Dugaan PWKKND</option>
                        </select>                    
                      </div>
                <div class="form-group">
                    <label for="judul_arsip">Daftar Pelapor *</label>
                    <table class="table" >
                    {{-- <table class="table" id="pelapor_wbs_ed"> --}}
                      <thead>
                        <tr>
                          <th>Nama Pelapor</th>
                          <th>Foto Tanda Pengenal</th>
                          <th>Tanda Pengenal / SIM / NIK</th>
                          <th>No. Tanda Pengenal / NIK / No. SIM</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pelapor as $a)
                              <tr>
                                <td>{{ $a->nama_pelapor }}</td>
                                <td> 
                                    <a href="{{ asset('upload/wbs/ktp/'. $a->foto_tnd_pngenal) }} " target="_blank">{{ $a->foto_tnd_pngenal }} </a>
                                </td> 
                                <td>{{ $a->tanda_pengenal }}</td>
                                <td>{{ $a->no_tnd_pengenal }}</td>
                              </tr>
                          @endforeach
                       </tbody>
                    </table>
                </div>
                <div class="form-group ">
                    <label >Dokumen Pendukung *</label>
                    <table class="table">
                    {{-- <table class="table" id="dokumen_jsonwbs_ed"> --}}
                      <thead>
                        <tr>
                          <th>File Dokumen Pendukung</th>
                        </tr>
                      </thead>
                      <tbody> 
                          @foreach ($docwbs as $b)
                              <tr>
                                <td>
                                    <a href="{{ asset('upload/wbs/bukti/'.$b->jns_dokumen) }} " target="_blank">{{ $b->jns_dokumen }} </a>
                                </td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>
                </div>
                <div class="form-group ">
                    <label >Nama Terlapor *</label>
                    <table class="table ">
                    {{-- <table class="table " id="trlpor_jsonwbs_ed"> --}}
                      <thead>
                        <tr>
                          <th>Nama Terlapor</th>
                          <th>NIK</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>Instansi</th>
                        </tr>
                      </thead>
                      <tbody> 
                          @foreach ($terlapor as $c)
                              <tr>
                                <td>{{ $c->nama_terlapor }}</td>
                                <td>{{ $c->nik }}</td>
                                <td>{{ $c->alamat }}</td>
                                <td>{{ $c->jabatan }}</td>
                                <td>{{ $c->instansi }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>
                </div>
                <div class="form-group ">
                    <h5>Informasi Tambahan</h5>
                    <div class="row">
                      <div class="col-5">
                        <label for="wkt_mulai">Lokasi Kejadian</label>
                        <input type="text" disabled value="{{ $wbs->lok_kejadian }}" name="wkt_mulai" class="form-control" required>
                      </div>
                      <div class="col-4">
                        <label for="wkt_selsai">Waktu Kejadian</label>
                        <input type="time" disabled value="{{ $wbs->wkt_kejadian }}" name="wkt_selsai" class="form-control" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="judul_arsip">Catatan Petugas </label>
                  <textarea name="ctt_petugas" disabled id="" class="form-control" cols="30" rows="5">{{ $wbs->ctt_petugas }}</textarea>
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
                {{-- <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}"> --}}
            </div>
        </form>
    </div>

</div>
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
                    {data: 'tanda_pengenal', name: 'tanda_pengenal'},
                    {data: 'no_tnd_pengenal', name: 'no_tnd_pengenal'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
            });
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
                      {data: 'jns_dokumen', name: 'jns_dokumen'},
                      {data: 'jumlah', name: 'jumlah'},
                      {data: 'ket', name: 'ket'},
                      {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
          });
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
    </script>
@endsection