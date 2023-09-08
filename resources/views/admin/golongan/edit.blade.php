@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.golongan.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.golongan.update', [$golongan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $golongan->id }}" required>
            </div>
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

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($golongan) ? $golongan->created_by : '') }}" required>
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