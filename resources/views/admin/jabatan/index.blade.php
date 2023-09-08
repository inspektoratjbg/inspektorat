@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.jabatan.create") }}">
                Tambah Data jabatan
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
       Data jabatan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:50px; text-align: center;">
                            No
                        </th>
                        <th>
                            Nama jabatan
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($jabatan as $key => $gol)
                        <tr>
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $gol->nama_jabatan ?? '' }}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.jabatan.show', $gol->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('jabatan_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.jabatan.edit', $gol->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('jabatan_manage')
                                <form action="{{ route('admin.jabatan.destroy', $gol->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
            <!-- <br/> -->
            Halaman : {{ $jabatan->currentPage() }} <br/>
            Jumlah Data : {{ $jabatan->total() }} <br/>
            Data Per Halaman : {{ $jabatan->perPage() }} <br/><br>

            {{ $jabatan->links() }}
        </div>


    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('scripts')
@parent
@endsection