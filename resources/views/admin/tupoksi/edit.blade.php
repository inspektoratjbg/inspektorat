@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.tupoksi.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.tupoksi.update", [$tupoksi->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $tupoksi->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('indikator') ? 'has-error' : '' }}">
                <label for="indikator">Tupoksi *</label>
                <input type="text" id="indikator" name="indikator" class="form-control" value="{{ old('indikator', isset($tupoksi) ? $tupoksi->indikator : '') }}" required>
                @if($errors->has('indikator'))
                    <em class="invalid-feedback">
                        {{ $errors->first('indikator') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tipe_indikator') ? 'has-error' : '' }}">
                <label for="tipe_indikator">Pernyataan Atasan * </label>
                <select name="tipe_indikator" id="tipe_indikator" class="form-control" style="width: auto;" required>
                    <option value="1" >Tugas Pokok</option>
                    <option value="2" >Fungsi</option>
                </select>
                @if($errors->has('tipe_indikator'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tipe_indikator') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('urutan_per_tahun') ? 'has-error' : '' }}">
                <label for="urutan_per_tahun">Urutan *</label>
                <input type="text" id="urutan_per_tahun" name="urutan_per_tahun" class="form-control" value="{{ old('urutan_per_tahun', isset($tupoksi) ? $tupoksi->urutan_per_tahun : '') }}" required>
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

                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $tupoksi->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection