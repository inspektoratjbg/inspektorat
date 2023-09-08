@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ubah Data LHP
    </div>


    <div class="card-body">
        <form action="{{ route('admin.absensi.update', $absensi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('nip_atasan') ? 'has-error' : '' }}">
                        <label for="nip_atasan">Pimpinan Anda *</label>
                        <select name="nip_atasan" id="nip_atasan" class="form-control" required>
                              <option value="Inspektur" @if($absensi->nip_atasan=="Inspektur") selected @endif>Inspektur</option>
                              <option value="Sekretaris" @if($absensi->nip_atasan=="Sekretaris") selected @endif>Sekretaris</option>
                              <option value="Kepala Sub Bagian Umum Keuangan dan Aset" @if($absensi->nip_atasan=="Kepala Sub Bagian Umum Keuangan dan Aset") selected @endif>Kepala Sub Bagian Umum Keuangan dan Aset</option>
                              <option value="Kepala Sub Bagian Perencanaan" @if($absensi->nip_atasan=="Kepala Sub Bagian Perencanaan") selected @endif>Kepala Sub Bagian Perencanaan</option>
                              <option value="Kepala Sub Bagian Analisa dan Evaluasi Hasil Pengawasan" @if($absensi->nip_atasan=="Kepala Sub Bagian Analisa dan Evaluasi Hasil Pengawasan") selected @endif>Kepala Sub Bagian Analisa dan Evaluasi Hasil Pengawasan</option>
                              <option value="Irban Keuangan" @if($absensi->nip_atasan=="Irban Keuangan") selected @endif>Irban Keuangan</option>
                              <option value="Irban Pemerintahan, Ekonomi dan Kesejahteraan" @if($absensi->nip_atasan=="Irban Pemerintahan, Ekonomi dan Kesejahteraan") selected @endif>Irban Pemerintahan, Ekonomi dan Kesejahteraan</option>
                              <option value="Irban Pembangunan" @if($absensi->nip_atasan=="Irban Pembangunan") selected @endif>Irban Pembangunan</option>
                              <option value="Irban Investigasi" @if($absensi->nip_atasan=="Irban Investigasi") selected @endif>Irban Investigasi</option>
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
                              <option value="06.30 - 07.00" @if($absensi->jam=="06.30 - 07.00") selected @endif>06.30 - 07.00</option>
                              <option value="09.30 - 10.00" @if($absensi->jam=="09.30 - 10.00") selected @endif>09.30 - 10.00</option>
                              <option value="12.30 - 13.00" @if($absensi->jam=="12.30 - 13.00") selected @endif>12.30 - 13.00</option>
                              <option value="15.00 - 15.30" @if($absensi->jam=="15.00 - 15.30") selected @endif>15.00 - 15.30</option>
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
                        <textarea type="text" id="keterangan" name="keterangan" class="form-control">{{ old('keterangan', isset($absensi) ? $absensi->keterangan : '') }}</textarea>
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
                      <table class="table table-bordered table-striped table-hover">
                        <tbody>
                          <tr>
                            <td>
                              <label for="lampiran">Lampiran *</label>
                              <input type="file" name="lampiran" class="form-control">
                              @if($errors->has('lampiran'))
                                  <em class="invalid-feedback">
                                      {{ $errors->first('lampiran') }}
                                  </em>
                              @endif
                              <p class="helper-block">
                                  <?php echo ''; ?>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Telah Melampirkan :<br>
                              <a href="{{ url('/upload/absensi/'.$absensi->lampiran) }}" target="_blank"><label>{{ $absensi->lampiran }}</label></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>

            </div>


            <div class="form-group">
                <input type="hidden" id="updated_by" name="updated_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="nama" name="nama" class="form-control" value="{{ $absensi->nama }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="nip" name="nip" class="form-control" value="{{ $absensi->nip }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $absensi->id }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <a href="{{ url()->previous() }}"><span class="btn btn-success"> Cancel</span></a>
            </div>
        </form>


    </div>
</div>
@endsection
