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
                SASARAN KERJA
            </caption>
            <caption style="margin-bottom:25px;">
                PEGAWAI NEGERI SIPIL
            </caption>
        <table class="tabe">
            <thead style="margin:35px;">
                    <tr align="center">
                        <th width="5%">
                            NO
                        </th>
                        <th colspan="2" width="40%">
                            I. PEJABAT PENILAI
                        </th>
                        <th width="5%">
                            NO
                        </th>
                        <th colspan="4" width="50%">
                            II. PEGAWAI NEGERI SIPIL YANG DINILAI
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            1.
                        </td>
                        <td width="5%">
                            Nama
                        </td>
                        <td width="35%">
                            {{ $sakip['nama_pihak_kedua'] }}
                        </td>
                        <td style="text-align:center;">
                            1.
                        </td>
                        <td colspan="2" width="5%">
                            Nama
                        </td>
                        <td colspan="2" width="45%">
                            {{ $sakip['nama_pihak_pertama'] }}
                        </td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            2.
                        </td>
                        <td width="5%">
                            NIP
                        </td>
                        <td width="35%">
                            {{ $sakip['nip_pihak_kedua'] }}
                        </td>
                        <td style="text-align:center;">
                            2.
                        </td>
                        <td colspan="2" width="5%">
                            NIP
                        </td>
                        <td colspan="2" width="45%">
                            {{ $sakip['nip_pihak_pertama'] }}
                        </td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            3.
                        </td>
                        <td width="5%">
                            Pangkat/Golongan
                        </td>
                        <td width="35%">
                            {{ $sakip['golongan_pihak_kedua'] }}
                        </td>
                        <td style="text-align:center;">
                            3.
                        </td>
                        <td colspan="2" width="5%">
                            Pangkat/Golongan
                        </td>
                        <td colspan="2" width="45%">
                            {{ $sakip['golongan_pihak_pertama'] }}
                        </td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            4.
                        </td>
                        <td width="5%">
                            Jabatan
                        </td>
                        <td width="35%">
                            {{ $sakip['jabatan_pihak_kedua'] }}
                        </td>
                        <td style="text-align:center;">
                            4.
                        </td>
                        <td colspan="2" width="5%">
                            Jabatan
                        </td>
                        <td colspan="2" width="45%">
                            {{ $sakip['jabatan_pihak_pertama'] }}
                        </td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            5.
                        </td>
                        <td width="5%">
                            Unit Kerja
                        </td>
                        <td width="35%">
                            Inspektorat Kabupaten Jombang
                        </td>
                        <td style="text-align:center;">
                            5.
                        </td>
                        <td colspan="2" width="5%">
                            Unit Kerja
                        </td>
                        <td colspan="2" width="45%">
                            Inspektorat Kabupaten Jombang
                        </td>
                    </tr>
                    <tr style="padding:0px;">
                        <td rowspan="2" style="text-align:center;">
                            NO
                        </td>
                        <td colspan="2" rowspan="2" style="text-align:center;">
                            III. Kegiatan Tugas Jabatan
                        </td>
                        <td rowspan="2" style="text-align:center;">
                            AK
                        </td>
                        <td colspan="4" style="text-align:center;">
                            TARGET
                        </td>

                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            KUANT/OUTPUT
                        </td>
                        <td style="text-align:center;">
                            KUAL/MUTU
                        </td>
                        <td style="text-align:center;">
                            WAKTU
                        </td>
                        <td style="text-align:center;">
                            BIAYA
                        </td>
                    </tr>
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
                    </tr>
                    <?php 
                        $i=1;
                        $j=1;
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endif
                    @endforeach

                    
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
                        <p style="color: white;">.</p>
                        <p>Pihak Penilai</p>
                        <p>{{ $sakip->jabatan_pihak_kedua }}</p><br><br><br><br>  
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_kedua }}</p>
                        <p>{{ $sakip->golongan_pihak_kedua }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_kedua }}</p>
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <!-- <p>{{ date('d F Y', strtotime($sakip->tanggal_surat))  }}</p> -->
                        <P>{{ tgl_indo(date($sakip->tanggal_surat)) }}</P>
                        <p>Pegawai Negeri Sipil Yang di Nilai</p>
                        <p>{{ $sakip->jabatan_pihak_pertama }}</p><br><br><br><br>    
                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_pertama }}</p>
                        <p>{{ $sakip->golongan_pihak_pertama }}</p>
                        <p>NIP. {{ $sakip->nip_pihak_pertama }}</p>
                    </td>
                </tr>
                
        </table>
        <br><br>
        <p>Catatan:</p>
        <p>* AK Bagi PNS yang memangku jabatan fungsional tertentu</p>
    </div>
</body>
</html>