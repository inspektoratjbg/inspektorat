@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.program.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.program.update", [$program->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $program->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('program') ? 'has-error' : '' }}">
                <label for="program">Program *</label>
                <input type="text" id="program" name="program" class="form-control" value="{{ old('program', isset($program) ? $program->program : '') }}" required>
                @if($errors->has('program'))
                    <em class="invalid-feedback">
                        {{ $errors->first('program') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('anggaran') ? 'has-error' : '' }}">
                <label for="anggaran">Anggaran *</label>
                <input type="text" id="anggaran" name="anggaran" class="form-control" value="{{ old('anggaran', isset($program) ? $program->anggaran : '') }}" required>
                @if($errors->has('anggaran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('anggaran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('urutan_per_tahun') ? 'has-error' : '' }}">
                <label for="urutan_per_tahun">Urutan *</label>
                <input type="text" id="urutan_per_tahun" name="urutan_per_tahun" class="form-control" value="{{ old('urutan_per_tahun', isset($program) ? $program->urutan_per_tahun : '') }}" required>
                @if($errors->has('urutan_per_tahun'))
                    <em class="invalid-feedback">
                        {{ $errors->first('urutan_per_tahun') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">

                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $program->id_sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection