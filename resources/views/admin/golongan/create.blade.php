@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.golongan.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.golongan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nama_golongan') ? 'has-error' : '' }}">
                <label for="nama_golongan">Nama golongan *</label>
                <input type="text" id="nama_golongan" name="nama_golongan" class="form-control" value="{{ old('nama_golongan', isset($golongan) ? $golongan->nama_golongan : '') }}" required>
                @if($errors->has('nama_golongan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_golongan') }}
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
                <button class="btn btn-success" onclick="location.href='{{ route("admin.golongan.index") }}> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection