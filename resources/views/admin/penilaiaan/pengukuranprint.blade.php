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
            font-size:12px;
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



    </style>
</head>
<body>
    <div class="container ">
       <caption>
                PENILAIAN CAPAIAN SASARAN KERJA
            </caption>
            <caption style="margin-bottom:25px;">
                PEGAWAI NEGERI SIPIL
            </caption>
        <?php $jumlah=count($perjanjian); ?>
        <table class="tabe">
            <thead style="margin:35px;">
                    <tr style="padding:0px;">
                        <th rowspan="2" style="text-align:center;">
                            NO
                        </th>
                        <th colspan="2" rowspan="2" style="text-align:center;">
                            I. KEGIATAN TUGAS JABATAN
                        </th>
                        <th rowspan="2" style="text-align:center;">
                            AK
                        </th>
                        <th colspan="4" style="text-align:center;">
                            TARGET
                        </th>
                        <th rowspan="2" style="text-align:center;">
                            AK
                        </th>
                        <th colspan="4" style="text-align:center;">
                            REALISASI
                        </th>
                        <th rowspan="2" style="text-align:center;">
                            PERHITUNGAN
                        </th>
                        <th rowspan="2" style="text-align:center;">
                            NILAI CAPAIAAN SKP
                        </th>
                    </tr>
                    <tr style="padding:0px;">
                        <th style="text-align:center;">
                            KUANT/OUTPUT
                        </th>
                        <th style="text-align:center;">
                            KUAL/MUTU
                        </th>
                        <th style="text-align:center;">
                            WAKTU
                        </th>
                        <th style="text-align:center;">
                            BIAYA
                        </th>
                        <th style="text-align:center;">
                            KUANT/OUTPUT
                        </th>
                        <th style="text-align:center;">
                            KUAL/MUTU
                        </th>
                        <th style="text-align:center;">
                            WAKTU
                        </th>
                        <th style="text-align:center;">
                            BIAYA
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            A.
                        </td>
                        <td colspan="2">
                            Unsur Utama
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=1;
                        $hey=0;
                    ?>
                    @foreach($perjanjian as $key => $perjanjian)
                        @if ($perjanjian['jenis_kegiatan']==1)
                            <tr style="padding:0px;">
                                <td style="text-align:center;">
                                    {{ $i++ }}
                                </td>
                                <td colspan="2">
                                    {{ $perjanjian['sasaran'] }}
                                </td>
                                <td style="text-align:center;">{{ $perjanjian['skp_target_ak'] }}</td>
                                <td style="text-align:center;">{{ $perjanjian['target'].' '.$perjanjian['satuan'] }}</td>
                                <td style="text-align:center;">{{ $perjanjian['skp_target_mutu'] }}</td>
                                <td style="text-align:center;">{{ $perjanjian['skp_target_waktu'] }} Bulan</td>
                                <td style="text-align:center;">-</td>
                                <td style="text-align:center;">{{ $perjanjian['skp_realisasi_ak'] }}</td>
                                <td style="text-align:center;">{{ $perjanjian['skp_realisasi_ouput'].' '.$perjanjian['satuan'] }}</td>
                                <td style="text-align:center;">{{ $perjanjian['skp_realisasi_mutu'] }}</td>
                                <td style="text-align:center;">{{ $perjanjian['skp_realisasi_waktu'] }} Bulan</td>
                                <td style="text-align:center;">-</td>
                                <td style="text-align:center;">{{ round($x=((($perjanjian['skp_realisasi_ouput']/$perjanjian['target'])*100)+(($perjanjian['skp_realisasi_mutu']/$perjanjian['skp_target_mutu'])*100)+(($perjanjian['skp_realisasi_waktu']/$perjanjian['skp_target_waktu'])*100)),2) }}</td>
                                <td style="text-align:center;">{{ round(($x/3),2) }}</td>
                                <?php $hey=$hey+(round(($x/3),2)); ?>
                            </tr>
                        @endif
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            B.
                        </td>
                        <td colspan="2">
                            Unsur Penunjang
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=1;
                    ?>
                    @foreach($perjanjiann as $key => $perjanjiann)
                        @if ($perjanjiann['jenis_kegiatan']==2)
                            <tr style="padding:0px;">
                                <td style="text-align:center;">
                                    {{ $i++ }}
                                </td>
                                <td colspan="2">
                                    {{ $perjanjiann['sasaran'] }}
                                </td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_target_ak'] }}</td>
                                <td style="text-align:center;">{{ $perjanjiann['target'].' '.$perjanjian['satuan'] }}</td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_target_mutu'] }}</td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_target_waktu'] }} Bulan</td>
                                <td style="text-align:center;">-</td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_realisasi_ak'] }}</td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_realisasi_ouput'].' '.$perjanjian['satuan'] }}</td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_realisasi_mutu'] }}</td>
                                <td style="text-align:center;">{{ $perjanjiann['skp_realisasi_waktu'] }} Bulan</td>
                                <td style="text-align:center;">-</td>
                                <td style="text-align:center;">{{ round($x=((($perjanjiann['skp_realisasi_ouput']/$perjanjiann['target'])*100)+(($perjanjiann['skp_realisasi_mutu']/$perjanjiann['skp_target_mutu'])*100)+(($perjanjiann['skp_realisasi_waktu']/$perjanjiann['skp_target_waktu'])*100)),2) }}</td>
                                <td style="text-align:center;">{{ round(($x/3),2) }}</td>
                                <?php $hey=$hey+(round(($x/3),2)); ?>
                            </tr>
                            
                        @endif
                    @endforeach

                    <tr style="padding:0px;">
                                <th style="text-align:center;">
                                </th>
                                <th colspan="2">
                                    II. TUGAS TAMBAHAN DAN KREATIFITAS/UNSUR PENUNJANG:
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                            </tr>
                            <tr style="padding:0px;">
                                <th style="text-align:center;">
                                    1
                                </th>
                                <th colspan="2">
                                    (Tugas tambahan)
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                            </tr>
                            <tr style="padding:0px;">
                                <th style="text-align:center;">
                                </th>
                                <th colspan="2">
                                    (Tugas tambahan)
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                            </tr>
                            <tr style="padding:0px;">
                                <th style="text-align:center;">
                                    2
                                </th>
                                <th colspan="2">
                                    (Kreatifitas)
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                            </tr>
                            <tr style="padding:0px;">
                                <th style="text-align:center;">
                                </th>
                                <th colspan="2">
                                    (Kreatifitas)
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th colspan="4" style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                                <th style="text-align:center;">
                                </th>
                            </tr>
                            <tr style="padding:0px;">
                                <th colspan="14" rowspan="2" style="text-align:center;">
                                    Nilai Capaian SKP
                                </th>
                                <th style="text-align:center;">
                                    {{ round($w=$hey/$jumlah,2) }}
                                </th>
                            </tr>
                            <tr style="padding:0px;">
                                <th style="text-align:center;">
                                    @if($w<=50)
                                        (Buruk)
                                    @elseif($w<=60)
                                        (Sedang)
                                    @elseif($w<=75)
                                        (Cukup)
                                    @elseif($w<=90.99)
                                        (Baik)
                                    @else
                                        (Sangat Baik)
                                    @endif
                                    
                                </th>
                            </tr>
                </tbody>  
        </table>
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
                       
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <!-- <p>{{ date('d F Y', strtotime($sakip->tanggal_surat))  }}</p> -->
                        <P>{{ tgl_indo(date($sakip->tanggal_surat)) }}</P>
                        <p>Penjabat Penilai</p>
                        <p>{{ $sakip->jabatan_pihak_kedua }}</p><br><br><br><br>  
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_kedua }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_kedua }}</p>
                    </td>
                </tr>
                
        </table>
    </div>
</body>
</html>