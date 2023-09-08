@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.tag.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.id') }}
                        </th>
                        <td>
                            {{ $tag->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.nama_tag') }}
                        </th>
                        <td>
                            {{ $tag->nama_tag }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.kategori_tag') }}
                        </th>
                        <td>
                            {{ $tag->kategori_tag }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.created_by') }}
                        </th>
                        <td>
                            
                            <span class="label label-info label-many">{{ $tag->created_by }}</span>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.updated_by') }}
                        </th>
                        <td>
                            
                            <span class="label label-info label-many">{{ $tag->updated_by }}</span>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.created_at') }}
                        </th>
                        <td>
                            
                            <span class="label label-info label-many">{{ $tag->created_at }}</span>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.updated_at') }}
                        </th>
                        <td>
                            
                            <span class="label label-info label-many">{{ $tag->updated_at }}</span>
                            
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