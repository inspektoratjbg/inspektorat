@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        Tambah Data Satuan
    </div>

    <div class="card-body">
        <form action="{{ route('admin.satuan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nama_satuan') ? 'has-error' : '' }}">
                <label for="nama_satuan">Nama Satuan *</label>
                <input type="text" id="nama_satuan" name="nama_satuan" class="form-control" value="{{ old('nama_satuan', isset($satuan) ? $satuan->nama_satuan : '') }}" required>
                @if($errors->has('nama_satuan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_satuan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <button class="btn btn-success" onclick="location.href={{ route("admin.satuan.index") }}"> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection
