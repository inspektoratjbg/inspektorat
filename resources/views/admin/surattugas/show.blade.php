@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.surattugas.title') }}
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
                            {{ $surattugas->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat
                        </th>
                        <td>
                            {{ $surattugas->no_surat_tugas}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Agenda
                        </th>
                        <td>
                            {{ $surattugas->no_agenda }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat
                        </th>
                        <td>
                            {{ $surattugas->tanggal_surat }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            Pemberi Tugas
                        </th>
                        <td>
                            {{ $surattugas->pemberi_tugas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Penerima Tugas
                        </th>
                        <td>
                            {{ $surattugas->penerima_tugas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hal Surat
                        </th>
                        <td>
                            {{ $surattugas->hal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            <?php 
                                $lampirkan = json_decode($surattugas->lampiran);

                             ?>
                            @foreach($lampirkan as $file)
                                <a href="{{ url('/upload/tugas/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/tugas/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jenis Surat
                        </th>
                        <td>
                            {{ $surattugas->jenis_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $surattugas->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $surattugas->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $surattugas->updated_at }}
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