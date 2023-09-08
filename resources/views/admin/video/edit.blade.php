@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.video.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.video.update", [$video->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $video->id }}" required>
            </div>

            <div class="form-group {{ $errors->has('judul_video') ? 'has-error' : '' }}">
                <label for="judul_video">Judul video *</label>
                <input type="text" id="judul_video" name="judul_video" class="form-control" value="{{ old('judul_video', isset($video) ? $video->judul_video : '') }}" required>
                @if($errors->has('judul_video'))
                    <em class="invalid-feedback">
                        {{ $errors->first('judul_video') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('link_video') ? 'has-error' : '' }}">
                <label for="link_video">Link video *</label>
                <input type="text" id="link_video" name="link_video" class="form-control" value="{{ old('link_video', isset($video) ? $video->link_video : '') }}" required>
                @if($errors->has('link_video'))
                    <em class="invalid-feedback">
                        {{ $errors->first('link_video') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('tgl_publikasi') ? 'has-error' : '' }}">
                <label for="tgl_publikasi">Tanggal Publikasi *</label>
                <input type="date" id="tgl_publikasi" name="tgl_publikasi" class="form-control" value="{{ old('tgl_publikasi', isset($video) ? $video->tgl_publikasi : '') }}" required>
                @if($errors->has('tgl_publikasi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tgl_publikasi') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">Status apakah dipublikasikan *
                <select name="status" id="status" class="form-control" required>
                        <option value="1" >Aktif</option>
                        <option value="0" >Tidak Aktif</option>
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