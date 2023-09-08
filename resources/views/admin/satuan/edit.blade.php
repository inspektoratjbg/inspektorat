@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ubah Data Satuan
    </div>

    <div class="card-body">
        <form action="{{ route('admin.satuan.update', [$satuan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $satuan->id }}" required>
            </div>
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
            </div>
        </form>


    </div>
</div>
@endsection
