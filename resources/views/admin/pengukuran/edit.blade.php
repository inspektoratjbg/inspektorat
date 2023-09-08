@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pengukuran.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.pengukuran.update", [$pengukuran->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $pengukuran->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('target') ? 'has-error' : '' }}">
                <!-- <label for="target">Target (Number) *</label> -->
                <input type="hidden" id="target" name="target" class="form-control" value="{{ old('target', isset($pengukuran) ? $pengukuran->target : '') }}" required>
                @if($errors->has('target'))
                    <em class="invalid-feedback">
                        {{ $errors->first('target') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('realisasi') ? 'has-error' : '' }}">
                <label for="realisasi">realisasi (Number) *</label>
                <input type="number" id="realisasi" name="realisasi" class="form-control" value="{{ old('realisasi', isset($pengukuran) ? $pengukuran->realisasi : '') }}" required>
                @if($errors->has('realisasi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('realisasi') }}
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

                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $pengukuran->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection