@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Monitoring Pengisian Sakip Tahun {{ $tahun }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sakipp.dashh") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">Tahun Sakip * </label>
                <select name="status" id="status" class="form-control" style="width: auto;" required>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                </select>
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Singkronkan">
            </div>
        </form>
        <br>
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">
                            No
                        </th>
                        <th>
                            Nama Pegawai
                        </th>
                        <th>
                            Nama Atasan
                        </th>
                        <th>
                            Perjanjian Kinerja
                        </th>
                        <th>
                            IKI dan IKU
                        </th>
                        <th>
                            SKP
                        </th>
                        <th>
                            Pengukuran
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($hasil); $i++)
                    <tr>
                        <td>
                            {{ $i+1 }}
                        </td>
                        <td>
                            {{ $hasil[$i][1] }}
                        </td>
                        <td>
                            {{ $hasil[$i][6] }}
                        </td>
                        <td>
                            @if ($hasil[$i][2] == 1)
                                <a class="btn btn-xs btn-warning" href="#">
                                    Belum Diverifikasi
                                </a>
                            @elseif ($hasil[$i][2] == 2)
                                <a class="btn btn-xs btn-success" href="#">
                                    Sudah Diverifikasi
                                </a>
                            @else
                                <a class="btn btn-xs btn-danger" href="#">
                                    Belum Dibuat
                                </a>
                            @endif
                        </td>
                        <td>
                            @if ($hasil[$i][3] == 1)
                                <a class="btn btn-xs btn-warning" href="#">
                                     Belum Diverifikasi
                                </a>
                            @elseif ($hasil[$i][3] == 2)
                                <a class="btn btn-xs btn-success" href="#">
                                    Sudah Diverifikasi
                                </a>
                            @else
                                <a class="btn btn-xs btn-danger" href="#">
                                    Belum Dibuat
                                </a>
                            @endif
                        </td>
                        <td>
                            @if ($hasil[$i][4] == 1)
                                <a class="btn btn-xs btn-warning" href="#">
                                    Belum Diverifikasi
                                </a>
                            @elseif ($hasil[$i][4] == 2)
                                <a class="btn btn-xs btn-success" href="#">
                                    Sudah Diverifikasi
                                </a>
                            @else
                                <a class="btn btn-xs btn-danger" href="#">
                                    Belum Dibuat
                                </a>
                            @endif
                        </td>
                        <td>
                            @if ($hasil[$i][5] == 1)
                                <a class="btn btn-xs btn-warning" href="#">
                                     Belum Diverifikasi
                                </a>
                            @elseif ($hasil[$i][5] == 2)
                                <a class="btn btn-xs btn-success" href="#">
                                    Sudah Diverifikasi
                                </a>
                            @else
                                <a class="btn btn-xs btn-danger" href="#">
                                    Belum Dibuat
                                </a>
                            @endif
                        </td>
                    </tr>
                        <!-- The current value is {{ $i }} -->
                    @endfor
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
