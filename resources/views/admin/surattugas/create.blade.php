@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.surattugas.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.surattugas.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('no_surat_tugas') ? 'has-error' : '' }}">
                <label for="no_surat_tugas">No Surat *</label>
                <input type="text" id="no_surat_tugas" name="no_surat_tugas" class="form-control" value="{{ old('no_surat_tugas', isset($surattugas) ? $surattugas->no_surat_tugas : '') }}" required>
                @if($errors->has('no_surat_tugas'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_surat_tugas') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
             <div class="form-group {{ $errors->has('no_agenda') ? 'has-error' : '' }}">
                <label for="no_agenda">No Agenda *</label>
                <input type="text" id="no_agenda" name="no_agenda" class="form-control" value="{{ old('no_agenda', isset($surattugas) ? $surattugas->no_agenda : '') }}" required>
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
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($surattugas) ? $surattugas->tanggal_surat : '') }}" required>
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
                <input type="text" id="hal_surat" name="hal_surat" class="form-control" value="{{ old('hal_surat', isset($surattugas) ? $surattugas->hal_surat : '') }}" required>
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
                <input type="file" id="lampiran" name="lampiran[]" class="form-control" value="{{ old('lampiran', isset($surattugas) ? $surattugas->lampiran : '') }}" multiple required>
                @if($errors->has('lampiran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('lampiran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('jenis_surat') ? 'has-error' : '' }}">
                <label for="roles">Jenis Surat Tugas *
                <select name="jenis_surat" id="jenis_surat" class="form-control select2" required>
                    <option value="surat tugas reguler">Surat Tugas Reguler</option>
                    <option value="surat tugas rinsus">Surat Tugas Rinsus</option>
                    <option value="surat tugas umum">Surat Tugas Umum</option>
                </select>
                @if($errors->has('jenis_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('jenis_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="pemberi_tugas" name="pemberi_tugas" class="form-control" value="{{ $pengguna['name'] }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="penerima_tugas" name="penerima_tugas" class="form-control" value="{{ $pengguna['name'] }}" required>
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