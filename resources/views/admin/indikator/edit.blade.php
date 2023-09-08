@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.indikator.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.indikator.update", [$indikator->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $indikator->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('formulasi') ? 'has-error' : '' }}">
                <label for="formulasi">Formulasi *</label>
                <input type="text" id="formulasi" name="formulasi" class="form-control" value="{{ old('formulasi', isset($indikator) ? $indikator->formulasi : '') }}" required>
                @if($errors->has('formulasi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('formulasi') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('sumber_data') ? 'has-error' : '' }}">
                <label for="sumber_data">Sumber Data *</label>
                <input type="text" id="sumber_data" name="sumber_data" class="form-control" value="{{ old('sumber_data', isset($indikator) ? $indikator->sumber_data : '') }}" required>
                @if($errors->has('sumber_data'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sumber_data') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('penanggung_jawab') ? 'has-error' : '' }}">
                <label for="penanggung_jawab">Penanggung Jawab *</label>
                <input type="text" id="penanggung_jawab" name="penanggung_jawab" class="form-control" value="{{ old('penanggung_jawab', isset($indikator) ? $indikator->penanggung_jawab : '') }}" required>
                @if($errors->has('penanggung_jawab'))
                    <em class="invalid-feedback">
                        {{ $errors->first('penanggung_jawab') }}
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

                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $indikator->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection