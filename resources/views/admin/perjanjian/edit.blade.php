@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.perjanjian.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.perjanjian.update", [$perjanjian->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $perjanjian->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('sasaran') ? 'has-error' : '' }}">
                <label for="sasaran">Sasaran *</label>
                <input type="text" id="sasaran" name="sasaran" class="form-control" value="{{ old('sasaran', isset($perjanjian) ? $perjanjian->sasaran : '') }}" required>
                @if($errors->has('sasaran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sasaran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('indikator_kinerja') ? 'has-error' : '' }}">
                <label for="indikator_kinerja">Indikator Kinerja *</label>
                <input type="text" id="indikator_kinerja" name="indikator_kinerja" class="form-control" value="{{ old('indikator_kinerja', isset($perjanjian) ? $perjanjian->indikator_kinerja : '') }}" required>
                @if($errors->has('indikator_kinerja'))
                    <em class="invalid-feedback">
                        {{ $errors->first('indikator_kinerja') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('satuan') ? 'has-error' : '' }}">
                <label for="satuan">Satuan ex: (LHA, LHE, LHR, etc) *</label>
                <input type="text" id="satuan" name="satuan" class="form-control" value="{{ old('satuam', isset($perjanjian) ? $perjanjian->satuan : '') }}" required>
                @if($errors->has('satuan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('satuan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('target') ? 'has-error' : '' }}">
                <label for="target">Target (Number) *</label>
                <input type="number" id="target" name="target" class="form-control" value="{{ old('target', isset($perjanjian) ? $perjanjian->target : '') }}" required>
                @if($errors->has('target'))
                    <em class="invalid-feedback">
                        {{ $errors->first('target') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('jenis_kegiatan') ? 'has-error' : '' }}">
                <label for="jenis_kegiatan">Pernyataan Atasan * </label>
                <select name="jenis_kegiatan" id="jenis_kegiatan" class="form-control" style="width: auto;" required>
                    <option value="1" >Unsur Utama</option>
                    <option value="2" >Unsur Penunjang</option>
                </select>
                @if($errors->has('jenis_kegiatan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('jenis_kegiatan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('urutan_per_tahun') ? 'has-error' : '' }}">
                <label for="urutan_per_tahun">Urutan *</label>
                <input type="text" id="urutan_per_tahun" name="urutan_per_tahun" class="form-control" value="{{ old('urutan_per_tahun', isset($perjanjian) ? $perjanjian->urutan_per_tahun : '') }}" required>
                @if($errors->has('urutan_per_tahun'))
                    <em class="invalid-feedback">
                        {{ $errors->first('urutan_per_tahun') }}
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

                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $perjanjian->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection