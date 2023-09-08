@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.arsip.title') }}
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
                            {{ $arsip->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Judul Arsip
                        </th>
                        <td>
                            {{ $arsip->judul_arsip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            File
                        </th>
                        <td>

                            <a href="{{ url('/upload/arsip/'.$arsip->nama_arsip) }}" target="_blank"><img width="550px" src="{{ url('/upload/arsip/'.$arsip->nama_arsip) }}"></a><br><br> 
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kategori
                        </th>
                        <td>
                            <?php 
                                $dis = json_decode($arsip->kategori_arsip);
                             ?>
                            @foreach($dis as $permission)
                                <span class="badge badge-danger">{{ $permission }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tag
                        </th>
                        <td>
                            <?php 
                                $dis = json_decode($arsip->tag_arsip);
                             ?>
                            @foreach($dis as $permission)
                                <span class="badge badge-warning">{{ $permission }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $arsip->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $arsip->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $arsip->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $arsip->updated_at }}
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