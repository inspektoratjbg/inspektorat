@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.gambar.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.gambar.update", [$gambar->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $gambar->id }}" required>
            </div>
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
            <?php $pk=json_decode($gambar->tag_gambar); ?>
            <div class="form-group {{ $errors->has('kategori_gambar') ? 'has-error' : '' }}">
                <label for="kategori_gambar">Kategori gambar *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="kategori_gambar[]" id="kategori_gambar" class="form-control select2" multiple="multiple" required>
                    @foreach($tag as $id => $tag)
                        <option <?php if (in_array($tag->kategori_tag, $pk, TRUE)){ echo "selected";} ?> value="{{ $tag->kategori_tag }}">{{ $tag->kategori_tag }}</option>
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
            <?php $pkk=json_decode($gambar->tag_gambar); ?>
            <div class="form-group {{ $errors->has('tag_gambar') ? 'has-error' : '' }}">
                <label for="tag_gambar">Tag gambar *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="tag_gambar[]" id="tag_gambar" class="form-control select2" multiple="multiple" required>
                    @foreach($tagall as $id => $tagall)
                        <option <?php if (in_array($tagall->nama_tag, $pkk, TRUE)){ echo "selected";} ?> value="{{ $tagall->nama_tag }}">{{ $tagall->nama_tag }}</option>
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
                <input type="file" id="nama_gambar" name="nama_gambar" class="form-control" value="{{ old('nama_gambar', isset($gambar) ? $gambar->nama_gambar : '') }}">
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

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($gambar) ? $gambar->created_by : '') }}" required>
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