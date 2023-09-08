@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.suratcuti.title') }}
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
                            {{ $suratcuti->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat
                        </th>
                        <td>
                            {{ $suratcuti->no_surat_cuti}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Agenda
                        </th>
                        <td>
                            {{ $suratcuti->no_agenda }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat
                        </th>
                        <td>
                            {{ $suratcuti->tanggal_surat }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            Pemberi Cuti
                        </th>
                        <td>
                            {{ $suratcuti->pemberi_cuti }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Penerima Cuti
                        </th>
                        <td>
                            {{ $suratcuti->penerima_cuti }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hal Surat
                        </th>
                        <td>
                            {{ $suratcuti->hal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            <?php 
                                $lampirkan = json_decode($suratcuti->lampiran);
                             ?>
                            @foreach($lampirkan as $file)
                                <a href="{{ url('/upload/cuti/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/cuti/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $suratcuti->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $suratcuti->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $suratcuti->updated_at }}
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