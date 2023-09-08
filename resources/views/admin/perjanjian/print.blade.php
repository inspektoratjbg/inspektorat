<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perjanjian</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family: Serif;
            color:#333;
            text-align:left;
            font-size:16px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            margin-left:35px;
            margin-right:25px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:14px;
            margin-bottom:4px;
            font-weight: bold;
        }

        td, tr, th{
            padding:10px;
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



    </style>
</head>
<body>
    <div class="container ">
        <div style="text-align: center;">
            <img src="images/logo.jpg" style="width:20%;"><br>
        </div>
        <br>
        <caption>
            PERJANJIAN KINERJA TAHUN {{ $sakip->tahun }}
        </caption>
        <caption>
            {{ strtoupper($sakip->jabatan_pihak_pertama) }}
        </caption>
        <caption style="margin-bottom:25px;">
            PADA INSPEKTORAT KABUPATEN JOMBANG
        </caption>
        <div style="text-align: justify;">
            <span style="margin-left:40px;">Dalam rangka mewujudkan manajemen pemerintahan yang effektif, transparan, dan akuntabel serta berorientasi pada hasil, yang bertanda tangan dibawah ini:</span><br><br>
            <table class="ttd">
            
                    <tr style="border:1px solid #fff; padding:1px;">
                        <td style="border:1px solid #fff; padding:1px;" width="10%">
                            <span>Nama</span>
                        </td>
                        <td style="border:1px solid #fff; padding:1px;" width="90%">
                            <span>: {{ $sakip->nama_pihak_pertama }}</span>
                        </td>
                    </tr>
                    <tr style="border:1px solid #fff; padding:1px;">
                        <td style="border:1px solid #fff; padding:1px;">
                            <span>Jabatan</span>
                        </td>
                        <td style="border:1px solid #fff; padding:1px;">
                            <span>: {{ $sakip->jabatan_pihak_pertama }}</span>
                        </td>
                    </tr>
            </table>
            <br>
            <span>Selanjutnya disebut pihak pertama</span><br><br>
            <table class="ttd">
            
                    <tr style="border:1px solid #fff; padding:1px;">
                        <td style="border:1px solid #fff; padding:1px;" width="10%">
                            <span>Nama</span>
                        </td>
                        <td style="border:1px solid #fff; padding:1px;" width="90%">
                            <span>: {{ $sakip->nama_pihak_kedua }}</span>
                        </td>
                    </tr>
                    <tr style="border:1px solid #fff; padding:1px;">
                        <td style="border:1px solid #fff; padding:1px;">
                            <span>Jabatan</span>
                        </td>
                        <td style="border:1px solid #fff; padding:1px;">
                            <span>: {{ $sakip->jabatan_pihak_kedua }}</span>
                        </td>
                    </tr>
            </table>
            <br>
            <span>Selaku atasan pihak pertama, selanjutnya disebut pihak kedua</span> <br><br>
            <span style="margin-left:40px;">Pihak pertama berjanji akan mewujudkan target kinerja yang seharusnya sesuai lampiran perjanjian ini, dalam rangka mencapai target kinerja jangka menengah seperti yang telah ditetapkan dalam dokumen perencanaan. Keberhasilan dan kegagalan pencapaian target kinerja tersebut menjadi tanggung jawab kami</span> <br><br>
            <span style="margin-left:40px;">Pihak kedua akan melakukan supervisi yang diperlukan serta akan melakukan evaluasi terhadap capaian kinerja dari perjanjian ini dan mengambil tindakan yang diperlukan dalam rangka pemberian penghargaan dan sanksi.</span>    <br><br>
        </div>

        <table class="ttd">
            
                <tr style="border:1px solid #fff;">

                    <td style="border:1px solid #fff;" width="65%">
                        <p style="color: white;">.</p>
                        <p>Pihak Kedua</p>
                        <p>{{ $sakip->jabatan_pihak_kedua }}</p><br><br><br><br>  
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_kedua }}</p>
                        <p>{{ $sakip->golongan_pihak_kedua }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_kedua }}</p>
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <!-- <p>{{ date('d F Y', strtotime($sakip->tanggal_surat))  }}</p> -->
                        <P>Jombang, {{ tgl_indo(date($sakip->tanggal_surat)) }}</P>
                        <p>Pihak Pertama</p>
                        <p>{{ $sakip->jabatan_pihak_pertama }}</p><br><br><br><br>    
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_pertama }}</p>
                        <p>{{ $sakip->golongan_pihak_pertama }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_pertama }}</p>
                    </td>
                </tr>
                
        </table>
        

        <pre style="page-break-before:always;"></pre>
       <caption>
                PERJANJIAN KINERJA TAHUN {{ $sakip->tahun }}
            </caption>
            <caption>
                {{ strtoupper($sakip->jabatan_pihak_pertama) }}
            </caption>
            <caption style="margin-bottom:25px;">
                PADA INSPEKTORAT KABUPATEN JOMBANG
            </caption>
        <table class="tabe">
            

            <thead style="margin:35px;">
                    <tr align="center">
                        <th>
                            No
                        </th>
                        <th>
                            Sasaran
                        </th>
                        <th>
                            Indikator Kinerja
                        </th>
                        <th>
                            Target
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="padding:0px;">
                        <td align="center" style="padding:0px;">
                            (1)
                        </td>
                        <td align="center" style="padding:0px;">
                            (2)
                        </td>
                        <td align="center" style="padding:0px;">
                            (3)
                        </td>
                        <td align="center" style="padding:0px;">
                            (4)
                        </td>
                    </tr>
                    @foreach($perjanjian as $key => $perjanjian)

                    <tr>
                        <td align="center">
                            {{ $perjanjian['urutan_per_tahun'] }}
                        </td>
                        <td>
                            {{ $perjanjian['sasaran'] }}
                        </td>
                        <td>
                            {{ $perjanjian['indikator_kinerja'] }}
                        </td>
                        <td>
                            {{ $perjanjian['target'].' '.$perjanjian['satuan'] }}
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>  
        </table>
        <br>
        @if ($program!=null)
        <table class="ttd">
            <tr style="border:1px solid #fff;">
                <td style="border:1px solid #fff;" width="70%">
                    Program/Kegiatan
                </td>
                <td style="border:1px solid #fff;" width="30%">
                    Anggaran
                </td>
            </tr>
            @foreach($program as $key => $program)
            <tr>
                <td style="border:1px solid #fff;" width="70%">
                    {{ $program['urutan_per_tahun'].'. '.$program['program'] }}
                </td>
                <td style="border:1px solid #fff;" width="30%">
                    {{ "Rp ".number_format($program['anggaran'],2,',','.') }}
                </td>
            </tr>
            @endforeach

        </table>
        @endif
        <br>
        <?php   

            function tgl_indo($tanggal){
                $bulan = array (
                    1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
            );
            $pecahkan = explode('-', $tanggal);
         
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }

         ?>
        <table class="ttd">
            
                <tr style="border:1px solid #fff;">

                    <td style="border:1px solid #fff;" width="65%">
                        <p style="color: white;">.</p>
                        <p>Pihak Kedua</p>
                        <p>{{ $sakip->jabatan_pihak_kedua }}</p><br><br><br><br>  
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_kedua }}</p>
                        <p>{{ $sakip->golongan_pihak_kedua }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_kedua }}</p>
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <!-- <p>{{ date('d F Y', strtotime($sakip->tanggal_surat))  }}</p> -->
                        <P>Jombang, {{ tgl_indo(date($sakip->tanggal_surat)) }}</P>
                        <p>Pihak Pertama</p>
                        <p>{{ $sakip->jabatan_pihak_pertama }}</p><br><br><br><br>    
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_pertama }}</p>
                        <p>{{ $sakip->golongan_pihak_pertama }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_pertama }}</p>
                    </td>
                </tr>
                
        </table>
    </div>
</body>
</html>