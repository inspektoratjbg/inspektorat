@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Data LHP
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
                            {{ $absensi->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIP
                        </th>
                        <td>
                            {{ $absensi->nip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama
                        </th>
                        <td>
                            {{ $absensi->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pimpinan
                        </th>
                        <td>
                            {{ $absensi->nip_atasan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal
                        </th>
                        <td>
                            {{ $absensi->tanggal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jam
                        </th>
                        <td>
                            {{ $absensi->jam }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Keterangan
                        </th>
                        <td>
                            {{ $absensi->keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            File
                        </th>
                        <td>
                            <a href="{{ url('/upload/absensi/'.$absensi->lampiran) }}" target="_blank"><img width="550px" height="550px" src="{{ url('/upload/absensi/'.$absensi->lampiran) }}"></a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $absensi->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $absensi->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $absensi->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $absensi->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
