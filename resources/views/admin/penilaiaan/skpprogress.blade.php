@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Progress SKP
    </div>

    <div class="card-body">
        <form action="{{ route('admin.penilaiaan.skpupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $skp->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('skp_target_ak') ? 'has-error' : '' }}">
                <label for="skp_target_ak">Angka Kredit (Number) *</label>
                <input type="text" id="skp_target_ak" name="skp_target_ak" class="form-control" value="{{ old('skp_target_ak', isset($skp) ? $skp->skp_target_ak : '') }}" required>
                @if($errors->has('skp_target_ak'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_target_ak') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('skp_target_mutu') ? 'has-error' : '' }}">
                <label for="skp_target_mutu">Kualitas (Number) *</label>
                <input type="number" id="skp_target_mutu" name="skp_target_mutu" class="form-control" value="{{ old('skp_target_mutu', isset($skp) ? $skp->skp_target_mutu : '') }}" required>
                @if($errors->has('skp_target_mutu'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_target_mutu') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('skp_target_waktu') ? 'has-error' : '' }}">
                <label for="skp_target_waktu">Waktu (Number) *</label>
                <input type="number" id="skp_target_waktu" name="skp_target_waktu" class="form-control" value="{{ old('skp_target_waktu', isset($skp) ? $skp->skp_target_waktu : '') }}" required>
                @if($errors->has('skp_target_waktu'))
                    <em class="invalid-feedback">
                        {{ $errors->first('skp_target_waktu') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $skp->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection