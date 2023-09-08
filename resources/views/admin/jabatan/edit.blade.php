@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.jabatan.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.jabatan.update', [$jabatan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $jabatan->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('nama_jabatan') ? 'has-error' : '' }}">
                <label for="nama_jabatan">Nama jabatan *</label>
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" value="{{ old('nama_jabatan', isset($jabatan) ? $jabatan->nama_jabatan : '') }}" required>
                @if($errors->has('nama_jabatan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_jabatan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($jabatan) ? $jabatan->created_by : '') }}" required>
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
@endsection