@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.jabatan.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.jabatan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">

                <input type="hidden" id="updated_by" name="updated_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <button class="btn btn-success" onclick="location.href='{{ route("admin.jabatan.index") }}> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection