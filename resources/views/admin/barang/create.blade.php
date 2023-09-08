@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.barang.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.barang.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nama_barang') ? 'has-error' : '' }}">
                <label for="nama_barang">Nama Barang *</label>
                <input type="text" id="nama_barang" name="nama_barang" class="form-control" value="{{ old('nama_barang', isset($barang) ? $barang->nama_barang : '') }}" required>
                @if($errors->has('nama_barang'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_barang') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('id_satuan') ? 'has-error' : '' }}">
                <label for="id_satuan">Satuan *
                <select name="id_satuan" id="id_satuan" class="form-control select2" required>
                    @foreach($satuan as $key => $satuan)
                        <option value="{{ $satuan->id }}">{{ $satuan->nama_satuan }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_satuan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('id_satuan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Harga barang*</label>
                 <div class="mb-3">
                <input type="number" id="harga_barang" name="harga_barang" class="form-control" value="{{ old('harga_barang', isset($barang) ? $barang->harga_barang : '') }}" required>
                </div>
                @if($errors->has('harga_barang'))
                    <em class="invalid-feedback">
                        {{ $errors->first('harga_barang') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('id_jenis_barang') ? 'has-error' : '' }}">
                <label for="id_jenis_barang">Jenis Barang *
                <select name="id_jenis_barang" id="id_jenis_barang" class="form-control select2" required>
                    @foreach($jenisbarang as $key => $jenisbarang)
                        <option value="{{ $jenisbarang->id }}">{{ $jenisbarang->nama_jenis_barang }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_jenis_barang'))
                    <em class="invalid-feedback">
                        {{ $errors->first('id_jenis_barang') }}
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
