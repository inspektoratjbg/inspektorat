@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Lihat Detail jenisbarang
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
                            {{ $jenisbarang->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama jenisbarang
                        </th>
                        <td>
                            {{ $jenisbarang->nama_jenis_barang }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $jenisbarang->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $jenisbarang->updated_at }}
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
