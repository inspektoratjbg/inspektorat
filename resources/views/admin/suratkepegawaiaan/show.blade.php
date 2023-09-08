@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.suratkepegawaiaan.title') }}
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
                            {{ $suratkepegawaiaan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->no_surat_kepegawaiaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Agenda
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->no_agenda }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->tanggal_surat }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            Pemberi Cuti
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->bertanda_tangan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Penerima Cuti
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->tertuju }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hal Surat
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->hal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            <?php 
                                $lampirkan = json_decode($suratkepegawaiaan->lampiran);
                             ?>
                            @foreach($lampirkan as $file)
                                <a href="{{ url('/upload/kepegawaiaan/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/kepegawaiaan/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $suratkepegawaiaan->updated_at }}
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