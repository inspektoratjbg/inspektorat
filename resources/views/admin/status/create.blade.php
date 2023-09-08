@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.status.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.status.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('status_kepegawaiaan') ? 'has-error' : '' }}">
                <label for="status_kepegawaiaan">Status Kepegawaiaan *</label>
                <input type="text" id="status_kepegawaiaan" name="status_kepegawaiaan" class="form-control" value="{{ old('status_kepegawaiaan', isset($status) ? $status->status_kepegawaiaan : '') }}" required>
                @if($errors->has('status_kepegawaiaan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status_kepegawaiaan') }}
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
                <button class="btn btn-success" onclick="location.href='{{ route("admin.status.index") }}> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection
