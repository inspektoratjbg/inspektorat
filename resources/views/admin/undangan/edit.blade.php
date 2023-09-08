@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.undangan.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.undangan.update", [$undangan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('no_surat_undangan') ? 'has-error' : '' }}">
                <label for="no_surat_undangan">No Surat *</label>
                <input type="text" id="no_surat_undangan" name="no_surat_undangan" class="form-control" value="{{ old('no_surat_undangan', isset($undangan) ? $undangan->no_surat_undangan : '') }}" required>
                @if($errors->has('no_surat_undangan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_surat_undangan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
             <div class="form-group {{ $errors->has('no_agenda') ? 'has-error' : '' }}">
                <label for="no_agenda">No Agenda *</label>
                <input type="text" id="no_agenda" name="no_agenda" class="form-control" value="{{ old('no_agenda', isset($undangan) ? $undangan->no_agenda : '') }}" required>
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
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($undangan) ? $undangan->tanggal_surat : '') }}" required>
                @if($errors->has('tanggal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('pemberi') ? 'has-error' : '' }}">
                <label for="pemberi">Pengirim Undangan *</label>
                <input type="text" id="pemberi" name="pemberi" class="form-control" value="{{ old('pemberi', isset($undangan) ? $undangan->pemberi : '') }}" required>
                @if($errors->has('pemberi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pemberi') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tertuju') ? 'has-error' : '' }}">
                <label for="tertuju">Tujuan Undangan *</label>
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
                <input type="text" id="hal_surat" name="hal_surat" class="form-control" value="{{ old('hal_surat', isset($undangan) ? $undangan->hal_surat : '') }}" required>
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
                <input type="file" id="lampiran" name="lampiran[]" class="form-control" value="{{ old('lampiran', isset($undangan) ? $undangan->lampiran : '') }}" multiple>
                @if($errors->has('lampiran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('lampiran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('jenis_undangan') ? 'has-error' : '' }}">
                <label for="roles">Jenis Undangan *
                <select name="jenis_undangan" id="jenis_undangan" class="form-control select2" required>
                    <option value="undangan masuk">Undangan Masuk</option>
                    <option value="undangan keluar">Undangan Keluar</option>
                </select>
                @if($errors->has('jenis_undangan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('jenis_undangan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="pemberi" name="pemberi" class="form-control" value="Inspektorat Kab. Jombang" required>
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