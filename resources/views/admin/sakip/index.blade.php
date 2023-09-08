@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.sakip.create") }}">
                <i class="fas fa-fw fa-pencil-ruler"> </i> Buat sakip Baru
            </a>
        </div>
    </div>
@endcan
<div class="row">
    <div class=" col-lg-12">
        <div class="brand-card">
            <!-- <div class="brand-card-header bg-twitter">
                <i class="fas fa-fw fa-id-badge"></i><br><br>
                <h1 class="card-title" style="color: white; vertical-align: center;">Sakip Pihak Ke-2</h1>
                <i class="fas fa-fw fa-id-badge"></i><br><br>
            </div> -->
            <div class="card-body text-success">
                <div class="row">


                  @foreach($sakip as $key => $sakip)
                      <div class="col-lg-6">
                          <div class="card text-white bg-dark mb-3">
                            <div class="card-header card-title">Sakip Tahun {{ $sakip['tahun'] }}</div>
                            <div class="card-body">
                                <!-- <h5 class="card-title">Sakip Tahun {{ $sakip['tahun'] }}</h5> -->
                                <p class="card-text">Nama Atasan: {{ $sakip['nama_pihak_kedua'] }}<br>
                                    Jabatan Atasan: {{ $sakip['jabatan_pihak_kedua'] }}<br>
                                    Golongan Atasan: {{ $sakip['golongan_pihak_kedua'] }}</p>
                                <a href="{{ route('admin.sakip.show', $sakip['id']) }}" class="btn btn-info">Lihat</a>
                                <a href="{{ route('admin.sakip.edit', $sakip['id']) }}" class="btn btn-warning">Ubah</a>
                                <form action="{{ route('admin.sakip.destroy', $sakip['id']) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-danger" value="Hapus">
                                </form>
                                <a href="{{ route('admin.sakip.pesan', $sakip['id']) }}" class="btn btn-primary">Pesan
                                </a>

                                <br>
                                <br>
                                @if ($sakip['status1']==2)
                                    <a href="{{ route('admin.perjanjian.list', $sakip['id']) }}" class="btn btn-danger">Perjanjian</a>
                                @elseif($sakip['status1']==3)
                                    <a href="{{ route('admin.perjanjian.list', $sakip['id']) }}" class="btn btn-warning">Perjanjian</a>
                                @else
                                    <a href="{{ route('admin.perjanjian.list', $sakip['id']) }}" class="btn btn-success">Perjanjian</a>
                                @endif

                                @if ($sakip['status2']==2)
                                    <a href="{{ route('admin.indikator.list', $sakip['id']) }}" class="btn btn-danger">IKI dan IKU</a>
                                @elseif($sakip['status2']==3)
                                    <a href="{{ route('admin.indikator.list', $sakip['id']) }}" class="btn btn-warning">IKI dan IKU</a>
                                @else
                                    <a href="{{ route('admin.indikator.list', $sakip['id']) }}" class="btn btn-success">IKI dan IKU</a>
                                @endif

                                @if ($sakip['status3']==2)
                                    <a href="{{ route('admin.penilaiaan.menu', $sakip['id']) }}" class="btn btn-danger">SKP</a>
                                @elseif($sakip['status3']==3)
                                    <a href="{{ route('admin.penilaiaan.menu', $sakip['id']) }}" class="btn btn-warning">SKP</a>
                                @else
                                    <a href="{{ route('admin.penilaiaan.menu', $sakip['id']) }}" class="btn btn-success">SKP</a>
                                @endif

                                @if ($sakip['status4']==2)
                                    <a href="{{ route('admin.pengukuran.list', $sakip['id']) }}" class="btn btn-danger">Pengukuran</a>
                                @elseif($sakip['status4']==3)
                                    <a href="{{ route('admin.pengukuran.list', $sakip['id']) }}" class="btn btn-warning">Pengukuran</a>
                                @else
                                    <a href="{{ route('admin.pengukuran.list', $sakip['id']) }}" class="btn btn-success">Pengukuran</a>
                                @endif

                                <br><br>
                                <a href="{{ route('admin.pengukuran.laporan', $sakip['id']) }}" target="_blank" class="btn btn-danger"> <i class="fas fa-fw fa-print"></i> Laporan Bukan Eselon</a>
                                <a href="{{ route('admin.perjanjian.laporan', $sakip['id']) }}" target="_blank" class="btn btn-danger"><i class="fas fa-fw fa-print"></i> Laporan Eselon</a>
                                <!-- <a href="{{ route('admin.perjanjian.sasaran', $sakip['id']) }}" target="_blank" class="btn btn-danger"><i class="fas fa-fw fa-print"></i> SKP</a> -->
                            </div>
                          </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('scripts')
@endsection
