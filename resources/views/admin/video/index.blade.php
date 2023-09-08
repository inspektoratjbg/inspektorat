@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.video.create") }}">
                Tambah
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Video
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Judul video
                        </th>
                        <th>
                            Link video
                        </th>
                        <th>
                            Tgl Publikasi
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Di Buat
                        </th>
                        <th>
                            Di Ubah
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($video as $key => $video)
                        <tr data-entry-id="{{ $video->id }}">
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $video->judul_video ?? '' }}
                            </td>
                            <td>
                                {{ $video->link_video ?? '' }}
                            </td>
                            <td>
                                {{ $video->tgl_publikasi ?? '' }}
                            </td>
                            <td>
                                {{ $video->status ?? '' }}
                            </td>
                            <td>
                                {{ $video->created_by ?? '' }}
                            </td>
                            <td>
                                {{ $video->updated_by ?? '' }}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.video.show', $video->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('update_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.video.edit', $video->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('delete_manage')
                                <form action="{{ route('admin.video.destroy', $video->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endcan

                            </td>

                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('scripts')
@parent
@endsection