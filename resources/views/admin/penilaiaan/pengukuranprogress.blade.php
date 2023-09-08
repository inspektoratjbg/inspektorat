@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Progress Pengukuran
    </div>

    <div class="card-body">
        <form action="{{ route('admin.penilaiaan.pengukuranupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $pengukuran->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('skp_realisasi_ak') ? 'has-error' : '' }}">
                <label for="skp_realisasi_ak">Angka Kredit (Number) *</label>
                <input type="text" id="skp_realisasi_ak" name="skp_realisasi_ak" class="form-control" value="{{ old('skp_realisasi_ak', isset($pengukuran) ? $pengukuran->skp_realisasi_ak : '') }}" required>
                @if($errors->has('skp_realisasi_ak'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_realisasi_ak') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('skp_realisasi_ouput') ? 'has-error' : '' }}">
                <label for="skp_realisasi_ouput">Output (Number) *</label>
                <input type="text" id="skp_realisasi_ouput" name="skp_realisasi_ouput" class="form-control" value="{{ old('skp_realisasi_ouput', isset($pengukuran) ? $pengukuran->skp_realisasi_ouput : '') }}" required>
                @if($errors->has('skp_realisasi_ouput'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_realisasi_ouput') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('skp_realisasi_mutu') ? 'has-error' : '' }}">
                <label for="skp_realisasi_mutu">Kualitas (Number) *</label>
                <input type="number" id="skp_realisasi_mutu" name="skp_realisasi_mutu" class="form-control" value="{{ old('skp_realisasi_mutu', isset($pengukuran) ? $pengukuran->skp_realisasi_mutu : '') }}" required>
                @if($errors->has('skp_realisasi_mutu'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_realisasi_mutu') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('skp_realisasi_waktu') ? 'has-error' : '' }}">
                <label for="skp_realisasi_waktu">Waktu (Number) *</label>
                <input type="number" id="skp_realisasi_waktu" name="skp_realisasi_waktu" class="form-control" value="{{ old('skp_realisasi_waktu', isset($pengukuran) ? $pengukuran->skp_realisasi_waktu : '') }}" required>
                @if($errors->has('skp_realisasi_waktu'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_realisasi_waktu') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $pengukuran->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection