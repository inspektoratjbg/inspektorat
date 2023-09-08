@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Verifikasi Sakip
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sakipp.update", [$sakipp->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $sakipp->id }}" required>
            </div>

            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">Pernyataan Atasan * </label>
                <select name="status" id="status" class="form-control" style="width: auto;" required>
                    <option value="1">Ya, Verifikasi Sebagai Benar</option>
                    <option value="2">Tidak, Verifikasi Sebagai Salah</option>
                </select>
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
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