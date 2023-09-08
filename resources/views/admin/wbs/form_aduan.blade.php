<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Telaah Pengaduan</title>
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
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <style>
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
    </style>
</head>
<body>
    <header>
        <div class="text-right">
            {{-- <span style="font-size:10px; border:none;">RA - </span> --}}
        </div>
    </header>
    <div>
       <div class="text-center"> <br>
            <h3>TELAAH PENGADUAN <br></h3>
        </div>
    </div>
    <div class="card-body">
        <table>
            <tbody>
                <tr>
                    <td rowspan="2"><b>Nama Pengaduan</b></td>
                    <td><b>No. {{ $wbs->no_regis }}</b></td>
                </tr>
                <tr>

                    <td style="width: 75%;"><b>Tgl. {{ $wbs->tgl_lapor }}</b></td>
                </tr>
            </tbody>
        </table> <br><br>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td >
                        <b>  Nama Penelaah : <br>
                             Tanggal Telaah :
                        </b>
                    </td>
                    <td >
                        <b>
                            Nama Reviewer : <br>
                            Tanggal Review : 
                        </b>
                    </td>
                </tr>
            </tbody>
        </table> <br> <br>
        <h5>NAMA DUGAAN</h5>
            <div  style=" border:1px solid #333; height:120px;" class="col-12">
                {{-- <span>{{ $wbs->isi_aduan }}</span> --}}
                <span>Tuliskan nama dugaan mendasarkan pada materi pengaduan yang disampaikan oleh pelapor
                        (dengan mengacu pada pemenuhan informasi 6W+2H)
                </span>
            </div> <br><br>
        <h5>TERLAPOR</h5>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>Nama Terlapor</th>
                        <th>Jabatan</th>
                        <th>Klasifikasi</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($terlapor as $a)
                        <tr>
                            <td>{{ $a->nama_terlapor }}</td>
                            <td>{{ $a->jabatan }}</td>
                            <td>{{ $wbs->jns_pelapor }}</td>
                            <td>{{ $a->alamat }}</td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table> <br><br>
        <h5>URAIAN TELAAH (Diisi Tim Telaah)</h5>
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td>Nama Penyimpangan</td>
                        <td class="text-center">:</td>
                        <td style="width: 700px;"></td>
                        {{-- <td>Tuliskan nama/jenis penyimpangan sesuai dengan lingkup kewenangan inspektorat</td> --}}
                    </tr>
                    <tr>
                        <td>Dugaan Aturan yang dilanggar</td>
                        <td class="text-center">:</td>
                        <td></td>
                        {{-- <td>Tuliskan detail pasal dan Aturan yang dilanggar</td> --}}
                    </tr>
                </tbody>
            </table> <br><br>

        <h5>RINGKASAN PENGADUAN</h5>
            {{-- <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="width: 15px;">1. </td>
                        <td><b>What (Apa)</b></td>
                        <td style="width: 30px;" class="text-center"> : </td>
                        <td style="width: 710px;"> </td>
                    </tr>
                </tbody>
            </table> --}}
            <div >
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td colspan="4">
                                <b>Tulis dan jelaskan ringkasan pengaduan (Kasus Posisi) yang disampaikan oleh Pelapor.</b> <br>
                                Penelaahan pengaduan masyarakat dilaksanakan untuk melakukan pengujian atau analisis yang <br>
                                dilakukan dengan menggunakan kriteria <b>6 W 2 H yaitu :</b>     
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>1. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>What (apa)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Apa jenis penyimpangan </td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>2. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>When (bila)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Kapan penyimpangan tersebut terjadi </td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>3. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>Where (dimana)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Dimana penyimpangan tersebut terjadi (Perusahaan/Instansi, UnitKerja) </td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>4. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>Who (siapa)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Pihak-pihak yang terduga terkait /bertanggungjawab </td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>5. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>Why (mengapa)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Penyebab terjadinya penyimpangan (Kelemahan SOP, kolusi)</td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>6. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>Whom (Objek/terdampak)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Pihak-pihak yang terkena dampak</td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>7. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>How (Bagaimana)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Bagaimana penyimpangan tersebut dilakukan </td> --}}
                        </tr>
                        <tr>
                            <td style="text-align: left; vertical-align: top;"><b>8. </b> </td>
                            <td style="text-align: left; vertical-align: top;"><b>How Much (Berapa banyak)</b> </td>
                            <td class="text-center"><b>:</b> </td>
                            <td style="width: 700px; height:80px;"><b></b> </td>
                            {{-- <td  style=" border:none;">Berapa banyak nilai kerugian yang ditimbulkan </td> --}}
                        </tr>
                    </tbody>
                </table>
            </div> <br><br>

            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td><b>Bidang/sub Bidang</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none; width:700px;"><b></b> </td>
                        {{-- <td>Tuliskan bidang terjadinya penyimpangan </td> --}}
                    </tr>
                    <tr>
                        <td><b>Nama Unit/Satuan Kerja</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan nama statker/unit kerja </td> --}}
                    </tr>
                    <tr>
                        <td><b>Tempat Kejadian / Locus</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan tempat kejadian <b>(locus delicti)</b> </td> --}}
                    </tr>
                    <tr>
                        <td><b>Waktu Kejadian</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan waktu kejadian <b>(tempus delicti)</b> </td> --}}
                    </tr>
                    <tr>
                        <td style="height:60px; text-align: left; vertical-align: top;"><b>Mengapa Dilakukan</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan analisis singkat dugaan motif penyimpanan yang dilakukan oleh terlapor </td> --}}
                    </tr>
                    <tr>
                        <td style="height:60px; text-align: left; vertical-align: top;"><b>Modus Operandi</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan analisis singkat dugaan modus penyimpanan yang dilakukan oleh terlapor </td> --}}
                    </tr>
                    <tr>
                        <td><b>Menyangkut Keuangan Daerah</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b>Ya/Tidak </b>(Tulis sumberdana yang dilaporkan) </td>
                        {{-- <td>Tuliskan dugaan sumber dana yang disimpangkan </td> --}}
                    </tr>
                    <tr>
                        <td><b>Perkiraan Nilai Rupiah</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan nominal dana </td> --}}
                    </tr>
                    <tr>
                        <td><b>Penanganan Lembaga Lain</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b>Ya/Tidak </b>(Tulis lembaga yang menangani) </td>
                        {{-- <td>Ya/Tidak </td> --}}
                    </tr>   
                    <tr>
                        <td><b>Merupakan Kewenangan Inspektorat</b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tulisakan/jelaskan analisis bahwa pengaduan tersebut merupakan kewenangan dari inspektorat</td> --}}
                    </tr>
                    <tr>
                        <td><b>Prioritas Penanganan</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Ya/Tidak</td> --}}
                    </tr>
                    <tr>
                        <td><b>Alasan Prioritas</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none;"><b>Ya/Tidak</b>(Sebutkan alasan jika "Ya") </td>
                        {{-- <td>Tuliskan alasan terkait prioritas penanganan pengaduan </td> --}}
                    </tr>
                    <tr>
                        <td style="text-align: left; vertical-align: top;"><b>Informasi Tambahan (Pengayaan)</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none; height:60px; text-align: left; vertical-align: top;"><b>Ada/Tidak</b>(Sebutkan) </td>
                        {{-- <td>Tuliskan/jelaskan informasi tambahan berdasrakan hasil kegiatan pengkayaan informasi </td> --}}
                    </tr>
                    <tr>
                        <td><b>Pengaduan Terkait Lainnya (Jika ada)</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Tuliskan informasi pengaduan terkait lainnya (apabila ada dalam database pengaduan) </td> --}}
                    </tr>
                </tbody>
            </table> <br>

            <h5>KESIMPULAN DAN SARAN</h5>
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="text-align: left; vertical-align: top;"><b>Kesimpulan Penelaah </b></td>
                        <td class="text-center">:</td>
                        <td  style=" border:none; width:700px; height:60px;"><b></b> </td>
                        {{-- <td>Tuliskan dan jelaskan detail simpulan penelaah/pemeriksa</td> --}}
                    </tr>
                    <tr>
                        <td style="text-align: left; vertical-align: top;"><b>Rekomendasi dan Usulan Tindaklanjut</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none; height:60px; "><b></b> </td>
                        {{-- <td>Tuliskan rekomendasi/usulan tindak lanjut</td> --}}
                    </tr>
                </tbody>
            </table> <br>

            <h5>HASIL REVIEW</h5>
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td><b>INSPEKTUR PEMBANTU</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none; width:700px;"><b></b> </td>
                        {{-- <td>Review IRBAN atas hasil telaah dan usulan rekomendasi pemeriksa</td> --}}
                    </tr>
                    <tr>
                        <td><b>INSPEKTUR</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none;"><b></b> </td>
                        {{-- <td>Review INSPEKTUR atas hasil telaah dan usulan rekomendasi pemeriksaan </td> --}}
                    </tr>
                    <tr>
                        <td style="text-align: left; vertical-align: top;"><b>SIMPULAN AKHIR</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none; height:60px; text-align: left; vertical-align: top;"><b></b>(Lakukan audit / tidak / tindakan lain) </td>
                        {{-- <td>Simpulan akhir dan rencana tindak lanjut </td> --}}
                    </tr>
                    <tr>
                        <td><b>JIKA SIMPULAN AKHIR DILAKUKAN AUDIT MAKA USULAN TIM ADALAH SEBAGAI BERIKUT</b></td>
                        <td class="text-center">:</td>
                         <td  style=" border:none;">
                            @foreach ($timaudit as $tm)
                           {{$loop->iteration }}. {{ $tm->peran_auditor }} : <b> {{ $tm->nama_pegawai }}, </b> 
                            @endforeach
                        </td>
                        {{-- <td>Simpulan akhir dan rencana tindak lanjut </td> --}}
                    </tr>
                </tbody>
            </table> <br>
      </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<script src="node_modules/angular-chart.js/dist/angular-chart.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/coreui.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
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