@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sk.title') }}
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
                            {{ $sk->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat
                        </th>
                        <td>
                            {{ $sk->no_sk}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Agenda
                        </th>
                        <td>
                            {{ $sk->no_agenda }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat
                        </th>
                        <td>
                            {{ $sk->tanggal_surat }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            Bertanda Tangan
                        </th>
                        <td>
                            {{ $sk->bertanda_tangan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            OPD
                        </th>
                        <td>
                            {{ $sk->opd }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hal Surat
                        </th>
                        <td>
                            {{ $sk->hal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            <?php 
                                $lampirkan = json_decode($sk->lampiran);
                             ?>
                            @foreach($lampirkan as $file)
                                <a href="{{ url('/upload/sk/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/sk/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $sk->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $sk->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $sk->updated_at }}
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