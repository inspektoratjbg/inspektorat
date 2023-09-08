@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Progress prestasi
    </div>

    <div class="card-body">
        <form action="{{ route('admin.penilaiaan.penilaiaanupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $prestasi->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('pelayanan') ? 'has-error' : '' }}">
                <label for="pelayanan">Pelayanan (Number) *</label>
                <input type="text" id="pelayanan" name="pelayanan" class="form-control" value="{{ old('pelayanan', isset($prestasi) ? $prestasi->pelayanan : '') }}" required>
                @if($errors->has('pelayanan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pelayanan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('integritas') ? 'has-error' : '' }}">
                <label for="integritas">Integritas (Number) *</label>
                <input type="text" id="integritas" name="integritas" class="form-control" value="{{ old('integritas', isset($prestasi) ? $prestasi->integritas : '') }}" required>
                @if($errors->has('integritas'))
                    <em class="invalid-feedback">
                        {{ $errors->first('integritas') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('komitmen') ? 'has-error' : '' }}">
                <label for="komitmen">Komitmen (Number) *</label>
                <input type="text" id="komitmen" name="komitmen" class="form-control" value="{{ old('komitmen', isset($prestasi) ? $prestasi->komitmen : '') }}" required>
                @if($errors->has('komitmen'))
                    <em class="invalid-feedback">
                        {{ $errors->first('komitmen') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('disiplin') ? 'has-error' : '' }}">
                <label for="disiplin">Disiplin (Number) *</label>
                <input type="text" id="disiplin" name="disiplin" class="form-control" value="{{ old('disiplin', isset($prestasi) ? $prestasi->disiplin : '') }}" required>
                @if($errors->has('disiplin'))
                    <em class="invalid-feedback">
                        {{ $errors->first('disiplin') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('kerjasama') ? 'has-error' : '' }}">
                <label for="kerjasama">Kerjasama (Number) *</label>
                <input type="text" id="kerjasama" name="kerjasama" class="form-control" value="{{ old('kerjasama', isset($prestasi) ? $prestasi->kerjasama : '') }}" required>
                @if($errors->has('kerjasama'))
                    <em class="invalid-feedback">
                        {{ $errors->first('kerjasama') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('kepemimpinan') ? 'has-error' : '' }}">
                <label for="kepemimpinan">Kepemimpinan (Number) *</label>
                <input type="text" id="kepemimpinan" name="kepemimpinan" class="form-control" value="{{ old('kepemimpinan', isset($prestasi) ? $prestasi->kepemimpinan : '') }}" required>
                @if($errors->has('kepemimpinan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('kepemimpinan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $prestasi->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection