@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
      Tambah Data Absensi
    </div>

    <div class="card-body">
      <form action="{{ route("admin.absensi.store") }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-lg-6">
                  <div class="form-group {{ $errors->has('nip_atasan') ? 'has-error' : '' }}">
                      <label for="nip_atasan">Pimpinan Anda *</label>
                      <select name="nip_atasan" id="nip_atasan" class="form-control" required>
                            <option value="Inspektur">Inspektur</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Kepala Sub Bagian Umum Keuangan dan Aset">Kepala Sub Bagian Umum Keuangan dan Aset</option>
                            <option value="Kepala Sub Bagian Perencanaan">Kepala Sub Bagian Perencanaan</option>
                            <option value="Kepala Sub Bagian Analisa dan Evaluasi Hasil Pengawasan">Kepala Sub Bagian Analisa dan Evaluasi Hasil Pengawasan</option>
                            <option value="Irban Keuangan">Irban Keuangan</option>
                            <option value="Irban Pemerintahan, Ekonomi dan Kesejahteraan">Irban Pemerintahan, Ekonomi dan Kesejahteraan</option>
                            <option value="Irban Pembangunan">Irban Pembangunan</option>
                            <option value="Irban Investigasi">Irban Investigasi</option>
                      </select>
                      @if($errors->has('nip_atasan'))
                          <em class="invalid-feedback">
                              {{ $errors->first('nip_atasan') }}
                          </em>
                      @endif
                      <p class="helper-block">
                          <?php echo ''; ?>
                      </p>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
                  <label for="tanggal">Tanggal Absensi *</label>
                      <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ old('tanggal', isset($absensi) ? $absensi->tanggal : '') }}" required>
                      @if($errors->has('tanggal'))
                          <em class="invalid-feedback">
                              {{ $errors->first('tanggal') }}
                          </em>string
                      @endif
                      <p class="helper-block">
                          <?php echo ''; ?>
                      </p>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group {{ $errors->has('jam') ? 'has-error' : '' }}">
                      <label for="jam">Jam Absensi *</label>
                      <select name="jam" id="jam" class="form-control" required>
                            <option value="06.30 - 07.00">06.30 - 07.00</option>
                            <option value="09.30 - 10.00">09.30 - 10.00</option>
                            <option value="12.30 - 13.00">12.30 - 13.00</option>
                            <option value="15.00 - 15.30">15.00 - 15.30</option>
                      </select>
                      @if($errors->has('jam'))
                          <em class="invalid-feedback">
                              {{ $errors->first('jam') }}string
                          </em>
                      @endif
                      <p class="helper-block">
                          <?php echo ''; ?>
                      </p>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                      <label for="keterangan">keterangan atau Pesan absensi (Jika diperlukan)</label>
                      <textarea type="text" id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan', isset($absensi) ? $absensi->keterangan : '') }}"></textarea>
                      @if($errors->has('keterangan'))
                          <em class="invalid-feedback">
                              {{ $errors->first('keterangan') }}
                          </em>
                      @endif
                      <p class="helper-block">
                          <?php echo ''; ?>
                      </p>
                  </div>
              </div>


              <div class="col-lg-6">
                  <div class="form-group {{ $errors->has('lampiran') ? 'has-error' : '' }}">
                      <label for="lampiran">lampiran *</label>
                      <input type="file" id="lampiran" name="lampiran" class="form-control" value="{{ old('lampiran', isset($absensi) ? $absensi->lampiran : '') }}">
                      @if($errors->has('lampiran'))
                          <em class="invalid-feedback">
                              {{ $errors->first('lampiran') }}
                          </em>
                      @endif
                      <p class="helper-block">
                          <?php echo ''; ?>
                      </p>
                  </div>
              </div>

          </div>


          <div class="form-group">
              <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
          </div>
          <div class="form-group">
              <input type="hidden" id="nama" name="nama" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
          </div>
          <div class="form-group">
              <input type="hidden" id="nip" name="nip" class="form-control" value="{{ $pengguna['nip'] }}" required>
          </div>
          <div>
              <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
              <a href="{{ url()->previous() }}"><span class="btn btn-success"> Cancel</span></a>
          </div>
      </form>


    </div>
</div>
@endsection
