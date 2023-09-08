@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.surat_masuk.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.surat_masuk.update", [$surat_masuk->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('no_surat_masuk') ? 'has-error' : '' }}">
                <label for="no_surat_masuk">No Surat *</label>
                <input type="text" id="no_surat_masuk" name="no_surat_masuk" class="form-control" value="{{ old('no_surat_masuk', isset($surat_masuk) ? $surat_masuk->no_surat_masuk : '') }}" required>
                @if($errors->has('no_surat_masuk'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_surat_masuk') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('pengirim') ? 'has-error' : '' }}">
                <label for="pengirim">Pengirim *</label>
                <input type="text" id="pengirim" name="pengirim" class="form-control" value="{{ old('pengirim', isset($surat_masuk) ? $surat_masuk->pengirim : '') }}" required>
                @if($errors->has('pengirim'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pengirim') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tanggal_masuk') ? 'has-error' : '' }}">
                <label for="tanggal_masuk">Tanggal Masuk Surat *</label>
                <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" value="{{ old('tanggal_masuk', isset($surat_masuk) ? $surat_masuk->tanggal_masuk : '') }}" required>
                @if($errors->has('tanggal_masuk'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_masuk') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tanggal_masuk') ? 'has-error' : '' }}">
                <label for="tanggal_surat">Tanggal Surat *</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($surat_masuk) ? $surat_masuk->tanggal_surat : '') }}" required>
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
                <input type="text" id="hal_surat" name="hal_surat" class="form-control" value="{{ old('hal_surat', isset($surat_masuk) ? $surat_masuk->hal_surat : '') }}" required>
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
                <input type="file" id="lampiran" name="lampiran" class="form-control" value="{{ old('lampiran', isset($surat_masuk) ? $surat_masuk->lampiran : '') }}">
                @if($errors->has('lampiran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('lampiran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('no_agenda') ? 'has-error' : '' }}">
                <label for="no_agenda">No Agenda *</label>
                <input type="text" id="no_agenda" name="no_agenda" class="form-control" value="{{ old('no_agenda', isset($surat_masuk) ? $surat_masuk->no_agenda : '') }}" required>
                @if($errors->has('no_agenda'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_agenda') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('pengolah') ? 'has-error' : '' }}">
                <label for="pengolah">Pengolah *</label>
                <input type="text" id="pengolah" name="pengolah" class="form-control" value="{{ old('pengolah', isset($surat_masuk) ? $surat_masuk->pengolah : '') }}">
                @if($errors->has('pengolah'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pengolah') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $pk=json_decode($surat_masuk->disposisi); ?>
            <div class="form-group {{ $errors->has('disposisi') ? 'has-error' : '' }}">
                <label for="roles">Disposisi *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="disposisi[]" id="roles" class="form-control select2" multiple="multiple">
                    @if($surat_masuk->disposisi!=null)
                      @foreach($disposisi as $id => $disposisi)
                          <option <?php if (in_array($disposisi->disposisi, $pk, TRUE)){ echo "selected";} ?> value="{{ $disposisi->disposisi }}">{{ $disposisi->disposisi }}</option>
                      @endforeach
                    @else
                      @foreach($disposisi as $id => $disposisi)
                          <option value="{{ $disposisi->disposisi }}">{{ $disposisi->disposisi }}</option>
                      @endforeach
                    @endif

                </select>
                @if($errors->has('disposisi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('disposisi') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('isi_disposisi') ? 'has-error' : '' }}">
                <label for="isi_disposisi">Isi Disposisi *</label>
                <input type="text" id="isi_disposisi" name="isi_disposisi" class="form-control" value="{{ old('isi_disposisi', isset($surat_masuk) ? $surat_masuk->isi_disposisi : '') }}">
                @if($errors->has('isi_disposisi'))
                    <em class="invalid-feedback">
                        {{ $errors->first('isi_disposisi') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $surat_masuk->created_by }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
