@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.indikator.title') }}
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
                            {{ $indikator->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kerja
                        </th>
                        <td>
                            {{ $indikator->sasaran }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Indikator Kinerja
                        </th>
                        <td>
                            {{ $indikator->indikator_kinerja }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Formulasi/ Rumus Perhitungan
                        </th>
                        <td>
                            {{ $indikator->formulasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sumber Data
                        </th>
                        <td>
                            {{ $indikator->sumber_data }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Penanggung Jawab
                        </th>
                        <td>
                            {{ $indikator->penanggung_jawab }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $indikator->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $indikator->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $indikator->updated_at }}
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