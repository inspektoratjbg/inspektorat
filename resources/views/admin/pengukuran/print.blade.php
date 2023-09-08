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
        <caption>
            PENGUKURAN KINERJA TRIBULAN
        </caption>
        <caption style="margin-bottom:25px;">
            INSPEKTORAT KABUPATEN JOMBANG
        </caption>

        <table class="ttd">
            <tr style="border:1px solid #fff; padding:1px;">
                <td style="border:1px solid #fff; padding:1px;" width="15%">
                    <span>NAMA</span>
                </td>
                <td style="border:1px solid #fff; padding:1px;" width="85%">
                    <span>: {{ $sakip->nama_pihak_pertama }}</span>
                </td>
            </tr>
            <tr style="border:1px solid #fff; padding:1px;">
                <td style="border:1px solid #fff; padding:1px;">
                    <span>JABATAN</span>
                </td>
                <td style="border:1px solid #fff; padding:1px;">
                    <span>: {{ strtoupper($sakip->jabatan_pihak_pertama) }}</span>
                </td>
            </tr>
            <tr style="border:1px solid #fff; padding:1px;">
                <td style="border:1px solid #fff; padding:1px;">
                    <span>S/D TRIBULAN</span>
                </td>
                <?php $x=date('m', strtotime($sakip->tanggal_surat));
                    $x=intval($x);
                ?>
                <td style="border:1px solid #fff; padding:1px;">
                    @if($x<=3)
                        <span>: I (S/D MARET) TAHUN ANGGARAN {{ $sakip->tahun }}</span>
                    @elseif($x<=6)
                        <span>: II (S/D JUNI) TAHUN ANGGARAN {{ $sakip->tahun }}</span>
                    @elseif($x<=9)
                        <span>: III (S/D SEPTEMBER) TAHUN ANGGARAN {{ $sakip->tahun }}</span>
                    @else
                        <span>: IV (S/D DESEMBER) TAHUN ANGGARAN {{ $sakip->tahun }}</span>
                    @endif
                    
                </td>
            </tr>
        </table>
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
                            Satuan
                        </th>
                        <th>
                            Target
                        </th>
                        <th>
                            Realisasi
                        </th>
                        <th>
                            Capaian
                        </th>
                    </tr>
                </thead>
                <tbody>
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
                            {{ $perjanjian['satuan'] }}
                        </td>
                        <td>
                            {{ $perjanjian['target'] }}
                        </td>
                        <td>
                            {{ $perjanjian['realisasi'] }}
                        </td>
                        <td>
                            {{ round($perjanjian['capaian'],2).' %' }}
                        </td>
                        
                    </tr>
                        
                    @endforeach
                </tbody>  
        </table>
        <br><br>
        <div></div>
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

                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <!-- <p>{{ date('d F Y', strtotime($sakip->tanggal_surat))  }}</p> -->
                        @if($x<=3)
                            <P>{{ 'Jombang, 31 Maret '.$sakip->tahun }}</P>
                        @elseif($x<=6)
                            <P>{{ 'Jombang, 30 Juni '.$sakip->tahun }}</P>
                        @elseif($x<=9)
                            <P>{{ 'Jombang, 30 September '.$sakip->tahun }}</P>
                        @else
                            <P>{{ 'Jombang, 31 Desember '.$sakip->tahun }}</P>
                        @endif
                        <P>{{ 'Jombang, '.tgl_indo(date($sakip->tanggal_surat)) }}</P>
                        <p>{{ $sakip->jabatan_pihak_kedua }}</p><br><br><br><br>    
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_kedua }}</p>
                        <p>{{ $sakip->golongan_pihak_kedua }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_kedua }}</p>
                    </td>
                </tr>
                
        </table>
    </div>
</body>
</html>