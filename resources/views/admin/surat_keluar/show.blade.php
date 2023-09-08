@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.surat_keluar.title') }}
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
                            {{ $surat_keluar->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat
                        </th>
                        <td>
                            {{ $surat_keluar->no_surat_keluar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Agenda
                        </th>
                        <td>
                            {{ $surat_keluar->no_agenda }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat
                        </th>
                        <td>
                            {{ $surat_keluar->tanggal_keluar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hal Surat
                        </th>
                        <td>
                            {{ $surat_keluar->hal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tertuju
                        </th>
                        <td>
                            {{ $surat_keluar->tertuju }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tembusan
                        </th>
                        <td>
                            {{ $surat_keluar->tembusan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat
                        </th>
                        <td>
                            {{ $surat_keluar->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            <?php 
                                $lampirkan = json_decode($surat_keluar->lampiran);
                             ?>
                            @foreach($lampirkan as $file)
                                <a href="{{ url('/upload/keluar/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/keluar/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $surat_keluar->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $surat_keluar->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $surat_keluar->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection