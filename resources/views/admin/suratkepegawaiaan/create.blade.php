@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.suratkepegawaiaan.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.suratkepegawaiaan.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('no_surat_kepegawaiaan') ? 'has-error' : '' }}">
                <label for="no_surat_kepegawaiaan">No Surat *</label>
                <input type="text" id="no_surat_kepegawaiaan" name="no_surat_kepegawaiaan" class="form-control" value="{{ old('no_surat_kepegawaiaan', isset($suratkepegawaiaan) ? $suratkepegawaiaan->no_surat_kepegawaiaan : '') }}" required>
                @if($errors->has('no_surat_kepegawaiaan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_surat_kepegawaiaan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
             <div class="form-group {{ $errors->has('no_agenda') ? 'has-error' : '' }}">
                <label for="no_agenda">No Agenda *</label>
                <input type="text" id="no_agenda" name="no_agenda" class="form-control" value="{{ old('no_agenda', isset($suratkepegawaiaan) ? $suratkepegawaiaan->no_agenda : '') }}" required>
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
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($suratkepegawaiaan) ? $suratkepegawaiaan->tanggal_surat : '') }}" required>
                @if($errors->has('tanggal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('bertanda_tangan') ? 'has-error' : '' }}">
                <label for="bertanda_tangan">Bertanda Tangan di Arsip *</label>
                <input type="text" id="bertanda_tangan" name="bertanda_tangan" class="form-control" value="{{ old('bertanda_tangan', isset($undangan) ? $undangan->bertanda_tangan : '') }}" required>
                @if($errors->has('bertanda_tangan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('bertanda_tangan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tertuju') ? 'has-error' : '' }}">
                <label for="tertuju">Tujuan Kepada *</label>
                <input type="text" id="tertuju" name="tertuju" class="form-control" value="{{ old('tertuju', isset($undangan) ? $undangan->tertuju : '') }}" required>
                @if($errors->has('tertuju'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tertuju') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('hal_surat') ? 'has-error' : '' }}">
                <label for="hal_surat">Hal Surat *</label>
                <input type="text" id="hal_surat" name="hal_surat" class="form-control" value="{{ old('hal_surat', isset($suratkepegawaiaan) ? $suratkepegawaiaan->hal_surat : '') }}" required>
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
                <input type="file" id="lampiran" name="lampiran[]" class="form-control" value="{{ old('lampiran', isset($suratkepegawaiaan) ? $suratkepegawaiaan->lampiran : '') }}" multiple required>
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
                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['name'] }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection