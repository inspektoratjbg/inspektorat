@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.berita.title_singular') }}
    </div>
    
    <div class="card-body">
        <form action="{{ route("admin.wbs.progress", [$wbs->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $wbs->id }}" required>
            </div>

            <div class="form-group">
                <input type="hidden" id="nama_pelapor" name="nama_pelapor" class="form-control" value="{{ $wbs->nama_pelapor }}" required>
            </div>

            <div class="form-group {{ $errors->has('catatan_feedback') ? 'has-error' : '' }}">
                <label for="catatan_feedback">Catatan untuk feedback ke pelapor *</label>
                <textarea id="catatan_feedback" name="catatan_feedback" class="form-control" value="{{ old('catatan_feedback', isset($wbs) ? $wbs->catatan_feedback : '') }}" required></textarea>
                @if($errors->has('catatan_feedback'))
                    <em class="invalid-feedback">
                        {{ $errors->first('catatan_feedback') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('lampiran_feedback') ? 'has-error' : '' }}">
                <label for="lampiran_feedback">Lampiran Feedback *</label>
                <input type="file" id="lampiran_feedback" name="lampiran_feedback" class="form-control" value="{{ old('lampiran_feedback', isset($wbs) ? $wbs->lampiran_feedback : '') }}" required>
                @if($errors->has('lampiran_feedback'))
                    <em class="invalid-feedback">
                        {{ $errors->first('lampiran_feedback') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('publikasi') ? 'has-error' : '' }}">
                <label for="publikasi">Tanggal Publikasi *</label>
                <input type="date" id="publikasi" name="publikasi" class="form-control" value="{{ old('publikasi', isset($wbs) ? $wbs->publikasi : '') }}" required>
                @if($errors->has('publikasi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('publikasi') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">Status konten berita *
                <select name="status" id="status" class="form-control" required>
                        <option value="1" >Belum ditindak</option>
                        <option value="2" >Ditindak</option>
                        <option value="3" >Sudah Memiliki Jawaban</option>
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