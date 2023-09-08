@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.surat_masuk.title') }}
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
                            {{ $surat_masuk->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Surat
                        </th>
                        <td>
                            {{ $surat_masuk->no_surat_masuk }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pengirim
                        </th>
                        <td>
                            {{ $surat_masuk->pengirim }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Masuk
                        </th>
                        <td>
                            {{ $surat_masuk->tanggal_masuk }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Surat
                        </th>
                        <td>
                            {{ $surat_masuk->tanggal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hal Surat
                        </th>
                        <td>
                            {{ $surat_masuk->hal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran / File
                        </th>
                        <td>
                            <?php
                                $lampirkan = json_decode($surat_masuk->lampiran);
                             ?>
                             @if($surat_masuk->lampiran!=null)
                               @foreach($lampirkan as $file)
                                   <a href="{{ url('/upload/masuk/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/masuk/'.$file) }}"></a><br><br>
                               @endforeach
                             @endif

                            <!-- <img width="550px" src="{{ url('/upload/masuk/'.$surat_masuk->lampiran) }}"> -->
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Agenda
                        </th>
                        <td>
                            {{ $surat_masuk->no_agenda }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pengolah
                        </th>
                        <td>
                            {{ $surat_masuk->pengolah }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Disposisi
                        </th>
                        <td>
                            <?php
                                $dis = json_decode($surat_masuk->disposisi);
                             ?>
                             @if($surat_masuk->disposisi!=null)
                               @foreach($dis as $permission)
                                   <span class="badge badge-info">{{ $permission }}</span>
                               @endforeach
                             @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Isi Disposisi
                        </th>
                        <td>
                            {{ $surat_masuk->isi_disposisi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $surat_masuk->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $surat_masuk->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $surat_masuk->updated_at }}
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
