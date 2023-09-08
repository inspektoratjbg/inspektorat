@extends('layouts.admin')
@section('content')
@can('inventaris_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.transaksi.create") }}">
                Tambah Transaksi Barang
            </a>
            <br><br>
            <div class="row">
                <div class="col-lg-4">  
                    <form action="{{ route('admin.transaksi.beritaacarapembelian') }}" method="POST" enctype="multipart/form-data" target="_blank">
                        @csrf
                            <input type="date" id="tanggal_diterima" name="tanggal_diterima" class="form-control" required>
                            @if($errors->has('tanggal_diterima'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('tanggal_diterima') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                <?php echo ''; ?>
                            </p>
                            <input class="btn btn-danger" type="submit" value="Cetak Berita Acara Pembelian">
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('admin.transaksi.bulananprint') }}" method="POST" enctype="multipart/form-data" target="_blank">
                        @csrf
                            <select name="bulan" id="bulan" class="form-control" style="width: auto;" required>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                            @if($errors->has('bulan'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('bulan') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                <?php echo ''; ?>
                            </p>
                            <input class="btn btn-danger" type="submit" value="Cetak Laporan Bulanan">
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('admin.transaksi.tahunanprint') }}" method="POST" enctype="multipart/form-data" target="_blank">
                        @csrf
                            <select name="tahun" id="tahun" class="form-control" style="width: auto;" required>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                            @if($errors->has('tahun'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('tahun') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                <?php echo ''; ?>
                            </p>
                            <input class="btn btn-danger" type="submit" value="Cetak Laporan Tahunan">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Data Transaksi
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-maul">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            No
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Harga Barang
                        </th>
                        <th>
                            Stock Barang
                        </th>
                        <th>
                            Barang Masuk
                        </th>
                        <th>
                            Barang Keluar
                        </th>
                        <th>
                            Sisa Barang
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($transaksi as $key => $transaksi)
                        <tr data-entry-id="{{ $transaksi->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $i }}
                            </td>
                            <td>
                                {{ $transaksi->tanggal_diterima ?? '' }}
                            </td>
                            <td>
                                {{ $transaksi->nama_barang ?? '' }}
                            </td>
                            <td>
                                Rp. {{ number_format($transaksi->harga_satuan, 2, ".", ",") }}
                            </td>
                            <td>
                                {{ $transaksi->saldo_awal ?? '' }}
                            </td>
                            <td>
                                {{ $transaksi->barang_masuk ?? '' }}
                            </td>
                            <td>
                                {{ $transaksi->irban_pemb+$transaksi->irban_ek+$transaksi->irban_keu+$transaksi->irban_pem+$transaksi->sekret ?? '' }}
                            </td>
                            <td>
                                {{ $transaksi->sisa ?? '' }}
                            </td>
                            <td>
                                @can('inventaris_manage')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.transaksi.show', $transaksi->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('inventaris_manage')
                                <form action="{{ route('admin.transaksi.destroy', $transaksi->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-maul:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
