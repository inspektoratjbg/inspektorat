@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ubah Data LHP
    </div>


    <div class="card-body">
    <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $lhpku->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tahun
                        </th>
                        <td>
                            {{ $lhpku->tahun }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat Tugas
                        </th>
                        <td>
                            {{ $lhpku->nomor_surat_tugas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat Tugas
                        </th>
                        <td>
                            {{ $lhpku->tanggal_surat_tugas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jenis LHP
                        </th>
                        <td>
                            {{ $lhpku->nama_jenis_lhp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor LHP
                        </th>
                        <td>
                            {{ $lhpku->nomor_lhp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal LHP
                        </th>
                        <td>
                            {{ $lhpku->tanggal_lhp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Perihal LHP
                        </th>
                        <td>
                            {{ $lhpku->perihal_lhp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Rekomendasi
                        </th>
                        <td>
                            {{ $lhpku->nomor_rekomendasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Rekomendasi
                        </th>
                        <td>
                            {{ $lhpku->tanggal_rekomendasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Perihal Rekomendasi
                        </th>
                        <td>
                            {{ $lhpku->perihal_rekomendasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Tim
                        </th>
                        <td>
                            {{ $lhpku->nama_tim }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Mulai
                        </th>
                        <td>
                            {{ $lhpku->tanggal_mulai }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Selesai
                        </th>
                        <td>
                            {{ $lhpku->tanggal_selesai }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Data LHP
                        </th>
                        @if($lhpku->status==1)
                            <td style="background-color:#ea7787">
                                Tidak Terverifikasi
                            </td>
                        @else
                            <td style="background-color:#7fb426">
                                Terverifikasi
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            Telah Melampirkan :<br>
                            @if($lhpku->lampiran!=null)
                            <?php $i=0; ?>
                            @foreach(json_decode($lhpku->lampiran) as $file)
                                <a href="{{ url('/upload/lhp/'.$file) }}" target="_blank"><label>{{$i+1}}. {{ $file }}</label></a><br>
                                <?php $i++; ?>
                            @endforeach
                            @else
                            Tidak ada LHP terlampir
                            @endif
                            <!-- <img width="550px" src="{{ url('/upload/masuk/'.$lhpku->lampiran) }}"> -->
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $lhpku->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $lhpku->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $lhpku->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $lhpku->updated_at }}
                        </td>
                    </t••••••••••••••••••••••••r>
                </tbody>
            </table>
        </div>
        <form action="{{ route('admin.lhp.verifikasistore', $lhpku->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                
            <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                        <label for="status">Verifikasi Status LHP *</label>
                        <select name="status" id="status" class="form-control col-lg-12" style="width: auto;" required>
                            <option <?php if($lhpku->status==1){echo "selected";} ?> value="1">Belum Diverifikasi</option>
                            <option <?php if($lhpku->status==2){echo "selected";} ?> value="2">Diverifikasi</option>
                            <option <?php if($lhpku->status==3){echo "selected";} ?> value="3">Tolak dan Revisi</option>
                        </select>
                        @if($errors->has('status'))
                            <em class="invalid-feedback">
                                {{ $errors->first('status') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            <?php echo ''; ?>
                        </p>
                    </div>
                </div>

            </div>

            
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $lhpku->id }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <a href="{{ route('admin.lhp.index') }}"><span class="btn btn-success"> Cancel</span></a>
            </div>
        </form>


    </div>
</div>
@endsection
