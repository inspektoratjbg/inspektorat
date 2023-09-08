@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.gambar.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.gambar.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('judul_gambar') ? 'has-error' : '' }}">
                <label for="judul_gambar">Nama gambar *</label>
                <input type="text" id="judul_gambar" name="judul_gambar" class="form-control" value="{{ old('judul_gambar', isset($gambar) ? $gambar->judul_gambar : '') }}" required>
                @if($errors->has('judul_gambar'))
                    <em class="invalid-feedback">
                        {{ $errors->first('judul_gambar') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('kategori_gambar') ? 'has-error' : '' }}">
                <label for="kategori_gambar">Kategori gambar *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="kategori_gambar[]" id="kategori_gambar" class="form-control select2" multiple="multiple" required>
                    @foreach($tag as $id => $tag)
                        <option value="{{ $tag->kategori_tag }}" {{ (in_array($id, old('kategori_gambar', [])) || isset($gambar) && $gambar->kategori_gambar->contains($id)) ? 'selected' : '' }}>{{ $tag->kategori_tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('kategori_gambar'))
                    <em class="invalid-feedback">
                        {{ $errors->first('kategori_gambar') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>

            <div class="form-group {{ $errors->has('tag_gambar') ? 'has-error' : '' }}">
                <label for="tag_gambar">Tag gambar *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="tag_gambar[]" id="tag_gambar" class="form-control select2" multiple="multiple" required>
                    @foreach($tagall as $id => $tagall)
                        <option value="{{ $tagall->nama_tag }}" {{ (in_array($id, old('tag_gambar', [])) || isset($gambar) && $gambar->tag_gambar->contains($id)) ? 'selected' : '' }}>{{ $tagall->nama_tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tag_gambar'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tag_gambar') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('nama_gambar') ? 'has-error' : '' }}">
                <label for="nama_gambar">Lampiran (doc,pdf,xlxs,jpeg,png,jpg|max:5MB) *</label>
                <input type="file" id="nama_gambar" name="nama_gambar" class="form-control" value="{{ old('nama_gambar', isset($gambar) ? $gambar->nama_gambar : '') }}" required>
                @if($errors->has('nama_gambar'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_gambar') }}
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
                <button class="btn btn-success" onclick="location.href='{{ route("admin.gambar.index") }}';"> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection