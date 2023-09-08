@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sk.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sk.update", [$sk->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('no_sk') ? 'has-error' : '' }}">
                <label for="no_sk">No Surat *</label>
                <input type="text" id="no_sk" name="no_sk" class="form-control" value="{{ old('no_sk', isset($sk) ? $sk->no_sk : '') }}" required>
                @if($errors->has('no_sk'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_sk') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
             <div class="form-group {{ $errors->has('no_agenda') ? 'has-error' : '' }}">
                <label for="no_agenda">No Agenda *</label>
                <input type="text" id="no_agenda" name="no_agenda" class="form-control" value="{{ old('no_agenda', isset($sk) ? $sk->no_agenda : '') }}" required>
                @if($errors->has('no_agenda'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_agenda') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tanggal_surat') ? 'has-error' : '' }}">
                <label for="tanggal_surat">Tanggal Surat *</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($sk) ? $sk->tanggal_surat : '') }}" required>
                @if($errors->has('tanggal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('hal_surat') ? 'has-error' : '' }}">
                <label for="hal_surat">Hal Surat *</label>
                <input type="text" id="hal_surat" name="hal_surat" class="form-control" value="{{ old('hal_surat', isset($sk) ? $sk->hal_surat : '') }}" required>
                @if($errors->has('hal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('hal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('lampiran') ? 'has-error' : '' }}">
                <label for="lampiran">Lampiran (jpeg,png,jpg|max:5MB) *</label>
                <input type="file" id="lampiran" name="lampiran[]" class="form-control" value="{{ old('lampiran', isset($sk) ? $sk->lampiran : '') }}" multiple>
                @if($errors->has('lampiran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('lampiran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="bertanda_tangan" name="bertanda_tangan" class="form-control" value="{{ $pengguna['name'] }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="opd" name="opd" class="form-control" value="{{ $pengguna['name'] }}" required>
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