@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.disposisi.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.disposisi.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('') ? 'has-error' : '' }}">
                <label for="disposisi">{{ trans('cruds.disposisi.fields.disposisi') }}*</label>
                <input type="text" id="disposisi" name="disposisi" class="form-control" value="{{ old('disposisi', isset($disposisi) ? $disposisi->disposisi : '') }}" required>
                @if($errors->has('disposisi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('disposisi') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.disposisi.fields.disposisi_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('') ? 'has-error' : '' }}">
                <label for="deskripsi">{{ trans('cruds.disposisi.fields.deskripsi') }}*</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{ old('deskripsi', isset($disposisi) ? $disposisi->deskripsi : '') }}" required>
                @if($errors->has('deskripsi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('deskripsi') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.disposisi.fields.deskripsi_helper') }}
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['name'] }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection