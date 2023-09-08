@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pengukuran.title') }}
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
                            {{ $pengukuran->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sasaran
                        </th>
                        <td>
                            {{ $pengukuran->sasaran }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Indikator Kinerja
                        </th>
                        <td>
                            {{ $pengukuran->indikator_kinerja }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Satuan
                        </th>
                        <td>
                            {{ $pengukuran->satuan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Target
                        </th>
                        <td>
                            {{ $pengukuran->target }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Realisasi
                        </th>
                        <td>
                            {{ $pengukuran->realisasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Capaian
                        </th>
                        <td>
                            {{ $pengukuran->capaian.' %' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $pengukuran->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $pengukuran->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $pengukuran->updated_at }}
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