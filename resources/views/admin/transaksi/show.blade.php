@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pegawai.title') }}
    </div>
    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    @foreach($transak as $key => $transak)
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $transak->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Di Terima
                        </th>
                        <td>
                            {{ $transak->tanggal_diterima }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Barang
                        </th>
                        <td>
                            {{ $transak->nama_barang }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Satuan
                        </th>
                        <td>
                            {{ $transak->nama_satuan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Harga transak
                        </th>
                        <td>
                            Rp. {{ number_format($transak->harga_satuan, 2, ".", ",") }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Saldo Awal
                        </th>
                        <td>
                            {{ $transak->saldo_awal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Barang Masuk
                        </th>
                        <td>
                            {{ $transak->barang_masuk }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Pengambilan Irban Pembangunan
                        </th>
                        <td>
                            {{ $transak->irban_pemb }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Pengambilan Irban Ekonomi
                        </th>
                        <td>
                            {{ $transak->irban_ek }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Pengambilan Irban Keuangan
                        </th>
                        <td>
                            {{ $transak->irban_keu }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Pengambilan Irban Pemerintahan
                        </th>
                        <td>
                            {{ $transak->irban_pem }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Pengambilan Sekretariat
                        </th>
                        <td>
                            {{ $transak->sekret }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sisa   
                        </th>
                        <td>
                            {{ $transak->sisa }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            No Surat   
                        </th>
                        <td>
                            {{ $transak->no_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Keterangan   
                        </th>
                        <td>
                            {{ $transak->keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pembuat   
                        </th>
                        <td>
                            {{ $transak->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $transak->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $transak->updated_at }}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-success" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
