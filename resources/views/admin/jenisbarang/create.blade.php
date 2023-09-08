@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        Tambah Data jenisbarang
    </div>

    <div class="card-body">
        <form action="{{ route('admin.jenisbarang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nama_jenis_barang') ? 'has-error' : '' }}">
                <label for="nama_jenis_barang">Nama Jenis Barang *</label>
                <input type="text" id="nama_jenis_barang" name="nama_jenis_barang" class="form-control" value="{{ old('nama_jenis_barang', isset($jenisbarang) ? $jenisbarang->nama_jenis_barang : '') }}" required>
                @if($errors->has('nama_jenis_barang'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_jenis_barang') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <button class="btn btn-success" onclick="location.href={{ route("admin.jenisbarang.index") }}"> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection
