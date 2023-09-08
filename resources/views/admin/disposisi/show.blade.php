@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.disposisi.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.disposisi.fields.id') }}
                        </th>
                        <td>
                            {{ $disposisi->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.disposisi.fields.disposisi') }}
                        </th>
                        <td>
                            {{ $disposisi->disposisi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.disposisi.fields.deskripsi') }}
                        </th>
                        <td>
                            {{ $disposisi->deskripsi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.disposisi.fields.created_by') }}
                        </th>
                        <td>
                            
                            <span class="label label-info label-many">{{ $disposisi->created_by }}</span>
                            
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