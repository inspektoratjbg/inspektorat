@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.gambar.title') }}
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
                            {{ $gambar->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Judul gambar
                        </th>
                        <td>
                            {{ $gambar->judul_gambar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            File
                        </th>
                        <td>
                            <a href="{{ url('/upload/gambar/'.$gambar->nama_gambar) }}" target="_blank"><img width="550px" src="{{ url('/upload/gambar/'.$gambar->nama_gambar) }}"></a><br><br>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kategori
                        </th>
                        <td>
                            <?php
                                $dis = json_decode($gambar->kategori_gambar);
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
                                $dis = json_decode($gambar->tag_gambar);
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
                            {{ $gambar->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $gambar->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $gambar->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $gambar->updated_at }}
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
