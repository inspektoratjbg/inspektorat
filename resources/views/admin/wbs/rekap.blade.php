<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Telaah Pengaduan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <style type="text/css">
        td, tr, th{
            padding:5px;
            border:1px solid #333;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
            font-weight: bold;
        }
        .tabe {
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:100%;
        }
        .ttd {
            width: 100%;
            margin:0 auto;
        }
        
        @print {
            @page :footer {
                display: none
            }
            @page :header {
                display: none
            }
        }
        .output{
            height: 8.8in;
            width: 15.6in;
            /* border: 1px solid red; */
            position: absolute;
            top: 0px;
            left:0px;
        }
        @media print{
            .output{
                -ms-transform: rotate(270deg);
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
                top: 3.5in;
                left: -3in;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="text-right">
            {{-- <span style="font-size:10px; border:none;">RA - </span> --}}
        </div>
    </header>
    <div class="output">
        <div class="text-center"> <br>
                <h1>TELAAH PENGADUAN <br></h1>
        </div>
        <div class="card-body ">
            <h4>URAIAN TELAAH (Diisi Tim Telaah)</h4> <br>
                {{-- <table id="wbs_offline_rekap" class="table" style="width: 100%;"> --}}
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Registasi</th>
                            <th>Tgl Surat</th>
                            <th>Identitas Pelapor</th>
                            <th>Tgl Terima</th>
                            <th>Perihal</th>
                            <th>Jenis Potensi</th>
                            <th>Jenis Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wbs as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->no_regis }}</td>
                                <td>{{ $a->tgl_lapor }}</td>
                                <td>
                                    <?php
                                        $cek_pelapor = \DB::select("SELECT * from temp_pelapor where noregis_id='$a->no_regis'");
                                    ?>
                                    @foreach ($cek_pelapor as $b)
                                        - {{ $b->nama_pelapor }} <br>
                                    @endforeach
                                </td>
                                <td>{{ $a->tgl_terima_lpr }}</td>
                                <td>{{ $a->perihal }}</td>
                                <td>{{ $a->jns_potensi }}</td>
                                <td>{{ $a->pendftrn_aduan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table><br>
        </div>
        <table class="ttd">

            <tr style="border:1px solid #fff;">

                <td style="border:1px solid #fff;" width="80%">
                   
                </td>
                <td style="border:1px solid #fff;" width="35%">
                    {{-- <P>{{ tgl_indo(date($cek_phk1->tanggal_surat)) }}</P> --}}
                    <p>Jombang, {{ $tgl_sekarang->translatedFormat('d F Y') }}</p>
                    <p>Inspektur Kabupaten Jombang</p>
                    <br><br><br><br>
                    <p style="text-decoration: underline;">{{ $inspektur->nama_pegawai }}</p>
                    <p>
                        <?php
                            $cek_golongan = \DB::select("SELECT * from tb_golongan where id='$inspektur->golongan_pegawai'");
                        ?>
                        @foreach ($cek_golongan as $c)
                        {{ $c->nama_golongan }}
                        @endforeach
                    </p>
                    <p>NIP. {{ $inspektur->nip }}</p>
                </td>
            </tr>

    </table>

    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
{{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script> --}}
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<script src="node_modules/angular-chart.js/dist/angular-chart.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/coreui.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('js/ckeditor.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    window.addEventListener("load", window.print());
</script>
<script type="text/javascript">
    // VIew Data (ServerSide)
        $(function () {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            var table = $('#wbs_offline_rekap').DataTable({
                // processing: true,
                serverSide: true,
                info: false,
                ordering: false,
                paging: false,
                bFilter: false,
                ajax: "{{ url('admin/wbs2/rekap_wbs/') }}",   
                columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'no_regis', name: 'no_regis'},
                        {data: 'tgl_lapor', name: 'tgl_lapor'},
                        {data: 'iden_pelapor', name: 'iden_pelapor'},
                        {data: 'tgl_terima_lpr', name: 'tgl_terima_lpr'},
                        {data: 'perihal', name: 'perihal'},
                        {data: 'jns_potensi', name: 'jns_potensi'},
                        {data: 'pendftrn_aduan', name: 'pendftrn_aduan', orderable: false, searchable: false}
                ]
            });
        });
</script>
