@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Verifikasi Sakip
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sakipp.update", [$sakipp->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $sakipp->id }}" required>
            </div>
            <div class="form-group">

                <input type="hidden" id="tipe_sakip" name="tipe_sakip" class="form-control" value="{{ $tipe_sakip }}" required>
            </div>
            @if ($tipe_sakip==1)
                <div class="form-group {{ $errors->has('status1') ? 'has-error' : '' }}">
                    <label for="status1">Pernyataan Atasan * </label>
                    <select name="status1" id="status1" class="form-control" style="width: auto;" required>
                        <option <?php if ($sakipp->status1==2){ echo "selected";} ?> value="2" >Belum Verifikasi</option>
                        <option <?php if ($sakipp->status1==3){ echo "selected";} ?> value="3" >Revisi</option>
                        <option <?php if ($sakipp->status1==1){ echo "selected";} ?> value="1" >Verifikasi</option>
                    </select>
                    @if($errors->has('status1'))
                        <em class="invalid-feedback">
                            {{ $errors->first('status1') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        <?php echo ''; ?>
                    </p>
                </div>
            @elseif($tipe_sakip==2)
                <div class="form-group {{ $errors->has('status2') ? 'has-error' : '' }}">
                    <label for="status2">Pernyataan Atasan * </label>
                    <select name="status2" id="status2" class="form-control" style="width: auto;" required>
                        <option <?php if ($sakipp->status2==2){ echo "selected";} ?> value="2" >Belum Verifikasi</option>
                        <option <?php if ($sakipp->status2==3){ echo "selected";} ?> value="3" >Revisi</option>
                        <option <?php if ($sakipp->status2==1){ echo "selected";} ?> value="1" >Verifikasi</option>
                    </select>
                    @if($errors->has('status2'))
                        <em class="invalid-feedback">
                            {{ $errors->first('status2') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        <?php echo ''; ?>
                    </p>
                </div>
            @elseif($tipe_sakip==3)
                <div class="form-group {{ $errors->has('status3') ? 'has-error' : '' }}">
                    <label for="status3">Pernyataan Atasan * </label>
                    <select name="status3" id="status3" class="form-control" style="width: auto;" required>
                        <option <?php if ($sakipp->status3==2){ echo "selected";} ?> value="2" >Belum Verifikasi</option>
                        <option <?php if ($sakipp->status3==3){ echo "selected";} ?> value="3" >Revisi</option>
                        <option <?php if ($sakipp->status3==1){ echo "selected";} ?> value="1" >Verifikasi</option>
                    </select>
                    @if($errors->has('status3'))
                        <em class="invalid-feedback">
                            {{ $errors->first('status3') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        <?php echo ''; ?>
                    </p>
                </div>
            @else
                <div class="form-group {{ $errors->has('status4') ? 'has-error' : '' }}">
                    <label for="status4">Pernyataan Atasan * </label>
                    <select name="status4" id="status4" class="form-control" style="width: auto;" required>
                        <option <?php if ($sakipp->status4==2){ echo "selected";} ?> value="2" >Belum Verifikasi</option>
                        <option <?php if ($sakipp->status4==3){ echo "selected";} ?> value="3" >Revisi</option>
                        <option <?php if ($sakipp->status4==1){ echo "selected";} ?> value="1" >Verifikasi</option>
                    </select>
                    @if($errors->has('status4'))
                        <em class="invalid-feedback">
                            {{ $errors->first('status4') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        <?php echo ''; ?>
                    </p>
                </div>
            @endif
            <div class="form-group {{ $errors->has('isi_pesan') ? 'has-error' : '' }}">
                <label for="isi_pesan">Isi Pesan *</label>
                <input type="text" id="isi_pesan" name="isi_pesan" class="form-control" value="{{ old('isi_pesan', isset($sakip) ? $sakip->isi_pesan : '') }}">
                @if($errors->has('isi_pesan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('isi_pesan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection