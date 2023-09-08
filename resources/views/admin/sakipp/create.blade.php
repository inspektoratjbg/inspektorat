@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Buat Sakip Baru
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sakip.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('tipe_sakip') ? 'has-error' : '' }}">
                <label for="tipe_sakip">Tipe Sakip *
                <select name="tipe_sakip" id="tipe_Sakip" class="form-control" style="width: auto;" required>
                    <option value="Perjanjian Kinerja Tahunan" >Perjanjian Kinerja Tahunan</option>
                    <option value="Perubahan Perjanjian Kinerja" >Perubahan Perjanjian Kinerja</option>
                    <option value="Indikator Kinerja Individu" >Indikator Kinerja Individu</option>
                    <option value="Laporan Kinerja Pejabat Pelaksana" >Laporan Kinerja Pejabat Pelaksana</option>
                </select>
                @if($errors->has('tipe_sakip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tipe_sakip') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tahun') ? 'has-error' : '' }}">
                <label for="tahun">Tahun Periode ex:(2019) *</label>
                <input type="text" id="tahun" name="tahun" class="form-control" value="{{ old('tahun', isset($sakip) ? $sakip->tahun : '') }}" required>
                @if($errors->has('tahun'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tahun') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('nip_pihak_pertama') ? 'has-error' : '' }}">
                <label for="nip_pihak_pertama">Pihak Pertama *
                    <!-- <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span> -->
                    <!-- <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label> -->
                <select name="nip_pihak_pertama" id="nip_pihak_pertama" class="form-control col-lg-12" style="width: auto;" required>
                    @foreach($pegawai as $id => $pegawai)
                        <option value="{{ $pegawai->nip }}" >{{ $pegawai->nama_pegawai }}</option>
                    @endforeach
                </select>
                @if($errors->has('nip_pihak_pertama'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nip_pihak_pertama') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('nip_pihak_kedua') ? 'has-error' : '' }}">
                <label for="nip_pihak_kedua">Pihak Kedua *
                <select name="nip_pihak_kedua" id="nip_pihak_kedua" class="form-control" style="width: auto;" required>
                    @foreach($pegawaikedua as $id => $pegawaikedua)
                        <option value="{{ $pegawaikedua->nip }}" >{{ $pegawaikedua->nama_pegawai }}</option>
                    @endforeach
                </select>
                @if($errors->has('nip_pihak_kedua'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nip_pihak_kedua') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('tanggal_surat') ? 'has-error' : '' }}">
                <label for="tanggal_surat">Tanggal Cetak *</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($sakip) ? $sakip->tanggal_surat : '') }}" required>
                @if($errors->has('tanggal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="updated_by" name="updated_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
<script>

</script>
@endsection