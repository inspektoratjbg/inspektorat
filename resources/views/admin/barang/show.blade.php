@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pegawai.title') }}
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
                            {{ $barang->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Barang
                        </th>
                        <td>
                            {{ $barang->nama_barang }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            ID Satuan
                        </th>
                        <td>
                            {{ $barang->id_satuan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Harga Barang
                        </th>
                        <td>
                            Rp. {{ number_format($barang->harga_barang, 2, ".", ",") }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            ID Jenis Barang
                        </th>
                        <td>
                            {{ $barang->id_jenis_barang }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $barang->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $barang->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-success" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
