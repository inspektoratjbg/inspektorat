@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">

    </div>


    <div class="card-body">
        <form action="{{ route("admin.berkas.store1") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('deskripsi_berkas') ? 'has-error' : '' }}">
                        <label for="deskripsi_berkas">Deskripsi Berkas *</label>
                        <textarea type="text" id="deskripsi_berkas" name="deskripsi_berkas" class="form-control" value="{{ old('deskripsi_berkas', isset($berkas) ? $berkas->deskripsi_berkas : '') }}" required></textarea>
                        @if($errors->has('deskripsi_berkas'))
                            <em class="invalid-feedback">
                                {{ $errors->first('deskripsi_berkas') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            <?php echo ''; ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('nama_berkas') ? 'has-error' : '' }}">
                        <label for="nama_berkas">Nama Berkas *</label>
                        <input type="text" id="nama_berkas" name="nama_berkas" class="form-control" value="{{ old('nama_berkas', isset($berkas) ? $berkas->nama_berkas : '') }}" required>
                        @if($errors->has('nama_berkas'))
                            <em class="invalid-feedback">
                                {{ $errors->first('nama_berkas') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            <?php echo ''; ?>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('berkas') ? 'has-error' : '' }}">
                        <label for="berkas">Berkas *</label>
                        <input type="file" id="berkas" name="berkas" class="form-control" value="{{ old('berkas', isset($berkas) ? $berkas->berkas : '') }}">
                        @if($errors->has('berkas'))
                            <em class="invalid-feedback">
                                {{ $errors->first('berkas') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            <?php echo ''; ?>
                        </p>
                    </div>
                </div>

            </div>
            
            
            <div class="form-group">
                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="nomor_lhp" name="nomor_lhp" class="form-control" value="{{ $lhp->nomor_lhp }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" id="id_lhp" name="id_lhp" class="form-control" value="{{ $lhp->id }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <a href="{{ url()->previous() }}"><span class="btn btn-success"> Cancel</span></a>
            </div>
        </form>


    </div>
</div>
@endsection
