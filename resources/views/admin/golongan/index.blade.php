@extends('layouts.admin')
@section('content')
@can('add_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.golongan.create") }}">
                Tambah Data Golongan
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
       Data Golongan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- <p>Cari Data Golongan Pegawai:</p>
            <form action="{{ route('admin.golongan.cari') }}" method="GET" class="form-inline">
                <input class="form-control" type="text" name="cari" placeholder="Cari Golongan Pegawai .." value="{{ old('cari') }}">
                <input class="btn btn-primary ml-3" type="submit" value="CARI">
            </form><br> -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:50px; text-align: center;">
                            No
                        </th>
                        <th>
                            Nama golongan
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($golongan as $key => $gol)
                        <tr>
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $gol->nama_golongan ?? '' }}
                            </td>
                            <td>
                                @can('view_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.golongan.show', $gol->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('golongan_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.golongan.edit', $gol->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                @can('golongan_manage')
                                <form action="{{ route('admin.golongan.destroy', $gol->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

            Halaman : {{ $golongan->currentPage() }} <br/>
            Jumlah Data : {{ $golongan->total() }} <br/>
            Data Per Halaman : {{ $golongan->perPage() }} <br/><br>

            {{ $golongan->links() }}
        </div>


    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('scripts')
@parent
@endsection