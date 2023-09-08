@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.arsip.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.arsip.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('judul_arsip') ? 'has-error' : '' }}">
                <label for="judul_arsip">Nama Arsip *</label>
                <input type="text" id="judul_arsip" name="judul_arsip" class="form-control" value="{{ old('judul_arsip', isset($arsip) ? $arsip->judul_arsip : '') }}" required>
                @if($errors->has('judul_arsip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('judul_arsip') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('kategori_arsip') ? 'has-error' : '' }}">
                <label for="kategori_arsip">Kategori Arsip *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="kategori_arsip[]" id="kategori_arsip" class="form-control select2" multiple="multiple" required>
                    @foreach($tag as $id => $tag)
                        <option value="{{ $tag->kategori_tag }}" {{ (in_array($id, old('kategori_arsip', [])) || isset($arsip) && $arsip->kategori_arsip->contains($id)) ? 'selected' : '' }}>{{ $tag->kategori_tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('kategori_arsip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('kategori_arsip') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tag_arsip') ? 'has-error' : '' }}">
                <label for="tag_arsip">Tag Arsip *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="tag_arsip[]" id="tag_arsip" class="form-control select2" multiple="multiple" required>
                    @foreach($tagall as $id => $tagall)
                        <option value="{{ $tagall->nama_tag }}" {{ (in_array($id, old('tag_arsip', [])) || isset($arsip) && $arsip->tag_arsip->contains($id)) ? 'selected' : '' }}>{{ $tagall->nama_tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tag_arsip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tag_arsip') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('nama_arsip') ? 'has-error' : '' }}">
                <label for="nama_arsip">Lampiran (doc,pdf,xlxs,jpeg,png,jpg|max:5MB) *</label>
                <input type="file" id="nama_arsip" name="nama_arsip" class="form-control" value="{{ old('nama_arsip', isset($arsip) ? $arsip->nama_arsip : '') }}" required>
                @if($errors->has('nama_arsip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_arsip') }}
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
                <button class="btn btn-success" onclick="location.href='{{ route("admin.arsip.index") }}';"> Cancel</button>
            </div>
        </form>


    </div>
</div>
@include('sweetalert::alert')
@endsection
