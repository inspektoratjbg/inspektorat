@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ubah Data jenisbarang
    </div>

    <div class="card-body">
        <form action="{{ route('admin.jenisbarang.update', [$jenisbarang->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $jenisbarang->id }}" required>
            </div>
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
            </div>
        </form>


    </div>
</div>
@endsection
