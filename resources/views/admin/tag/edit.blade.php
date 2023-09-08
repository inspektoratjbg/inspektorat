@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.tag.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.tag.update", [$tag->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('') ? 'has-error' : '' }}">
                <label for="nama_tag">{{ trans('cruds.tag.fields.nama_tag') }}*</label>
                <input type="text" id="nama_tag" name="nama_tag" class="form-control" value="{{ old('nama_tag', isset($tag) ? $tag->nama_tag : '') }}" required>
                @if($errors->has('nama_tag'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_tag') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.tag.fields.nama_tag_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('') ? 'has-error' : '' }}">
                <label for="kategori_tag">{{ trans('cruds.tag.fields.kategori_tag') }}*</label>
                <input type="text" id="kategori_tag" name="kategori_tag" class="form-control" value="{{ old('kategori_tag', isset($tag) ? $tag->kategori_tag : '') }}" required>
                @if($errors->has('kategori_tag'))
                    <em class="invalid-feedback">
                        {{ $errors->first('kategori_tag') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.tag.fields.kategori_tag_helper') }}
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($tag) ? $tag->created_by : '') }}" required>
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