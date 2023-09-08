@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.surat_keluar.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.surat_keluar.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('no_surat_keluar') ? 'has-error' : '' }}">
                <label for="no_surat_keluar">No Surat *</label>
                <input type="text" id="no_surat_keluar" name="no_surat_keluar" class="form-control" value="{{ old('no_surat_keluar', isset($surat_keluar) ? $surat_keluar->no_surat_keluar : '') }}" required>
                @if($errors->has('no_surat_keluar'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_surat_keluar') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
             <div class="form-group {{ $errors->has('no_agenda') ? 'has-error' : '' }}">
                <label for="no_agenda">No Agenda *</label>
                <input type="text" id="no_agenda" name="no_agenda" class="form-control" value="{{ old('no_agenda', isset($surat_keluar) ? $surat_keluar->no_agenda : '') }}" required>
                @if($errors->has('no_agenda'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_agenda') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tanggal_keluar') ? 'has-error' : '' }}">
                <label for="tanggal_surat">Tanggal Surat *</label>
                <input type="date" id="tanggal_surat" name="tanggal_keluar" class="form-control" value="{{ old('tanggal_surat', isset($surat_keluar) ? $surat_keluar->tanggal_surat : '') }}" required>
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
                <input type="text" id="hal_surat" name="hal_surat" class="form-control" value="{{ old('hal_surat', isset($surat_keluar) ? $surat_keluar->hal_surat : '') }}" required>
                @if($errors->has('hal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('hal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tertuju') ? 'has-error' : '' }}">
                <label for="tertuju">tertuju *</label>
                <input type="text" id="tertuju" name="tertuju" class="form-control" value="{{ old('tertuju', isset($surat_keluar) ? $surat_keluar->tertuju : '') }}" required>
                @if($errors->has('tertuju'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tertuju') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tembusan') ? 'has-error' : '' }}">
                <label for="tembusan">tembusan *</label>
                <input type="text" id="tembusan" name="tembusan" class="form-control" value="{{ old('tembusan', isset($surat_keluar) ? $surat_keluar->tembusan : '') }}">
                @if($errors->has('tembusan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tembusan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                <label for="alamat">Alamat *</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', isset($surat_keluar) ? $surat_keluar->alamat : '') }}" required>
                @if($errors->has('alamat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('lampiran') ? 'has-error' : '' }}">
                <label for="lampiran">Lampiran (jpeg,png,jpg|max:5MB) *</label>
                <input type="file" id="lampiran" name="lampiran[]" class="form-control" value="{{ old('lampiran', isset($surat_keluar) ? $surat_keluar->lampiran : '') }}" multiple required>
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