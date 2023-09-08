@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Data Pengajuan Sakip
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th  width="20%">
                            Tipe Sakip
                        </th>
                        <th width="60%">
                            Pesan
                        </th>
                        <th  width="15%">
                            Tanggal Pesan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($pesan as $key => $pesan)

                    <tr>
                        <td>
                            {{ $i }}
                        </td>
                        <td>
                            @if ($pesan->tipe_pesan==1)
                                Perjanjian Kinerja
                            @elseif($pesan->tipe_pesan==2)
                                IKI dan IKU
                            @elseif($pesan->tipe_pesan==3)
                                SKP
                            @else
                                Pengukuran
                            @endif
                        </td>
                        <td>
                            {{ $pesan->isi_pesan }}
                        </td>
                        <td>
                            {{ $pesan->created_at }}
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
<script>
$(function () {

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection