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
            font-size:16px;
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
        <table class="ttd">
                
                <tr style="border:1px solid #fff;">

                    <td style="border:1px solid #fff;" width="60%">
                    </td>
                    <td style="border:1px solid #fff; vertical-align:top;" width="10%">
                        <!-- <p>{{ date('d F Y', strtotime($sakip->tanggal_surat))  }}</p> -->
                        LAMPIRAN
                    </td>
                    <td style="border:1px solid #fff;" width="30%">
                        KEPUTUSAN INSPEKTORAT
                        KABUPATEN JOMBANG <br>
                        NOMOR    : <br>
                        TANGGAL  :
                    </td>
                </tr>
                
        </table>
        <caption>
            INDIKATOR KINERJA INDIVIDU (IKI)
        </caption>
        <caption>
            {{ strtoupper($sakip->jabatan_pihak_pertama) }}
        </caption>
        <caption style="margin-bottom:25px;">
            DI LINGKUNGAN INSPEKTORAT KABUPATEN JOMBANG
        </caption>
        <div style="text-align: justify;">
        <table class="ttd">
                
                <tr style="border:1px solid #fff; padding:2px;">

                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="5%">
                        1. 
                    </td>
                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="15%">
                        Instansi
                    </td>
                    <td width="2%" style="border:1px solid #fff; vertical-align:top; padding:2px;">
                        :
                    </td>
                    <td style="border:1px solid #fff; padding:2px;" width="78%">
                        INSPEKTORAT KABUPATEN JOMBANG
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:2px;">

                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="5%">
                        2. 
                    </td>
                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="15%">
                        Visi
                    </td>
                    <td width="2%" style="border:1px solid #fff; vertical-align:top; padding:2px;">
                        :
                    </td>
                    <td style="border:1px solid #fff; padding:2px;" width="78%">
                        BERSAMA MEWUJUDKAN JOMBANG YANG BERKARAKTER DAN BERDAYA SAING
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:2px;">

                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="5%">
                        3. 
                    </td>
                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="15%">
                        Misi
                    </td>
                    <td width="2%" style="border:1px solid #fff; vertical-align:top; padding:2px;">
                        :
                    </td>
                    <td style="border:1px solid #fff; padding:2px;" width="78%">
                        MEWUJUDKAN TATA KELOLA KEPEMERINTAHAN YANG BERSIH DAN PROFESIONAL
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:2px;">

                    <td style="border:1px solid #fff; padding:2px;" width="5%">
                        4. 
                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="15%">
                        Tujuan
                    </td>
                    <td width="2%" style="border:1px solid #fff; vertical-align:top; padding:2px;">
                        :
                    </td>
                    <td style="border:1px solid #fff; padding:2px;" width="78%">
                        MEWUJUDKAN PENGAWASAN YANG PROFESIONAL DAN AKUNTABEL
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:2px;">

                    <td style="border:1px solid #fff; padding:2px; vertical-align:top;" width="5%">
                        5. 
                    </td>
                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="15%">
                        Tugas Pokok
                    </td>
                    <td width="2%" style="border:1px solid #fff; vertical-align:top; padding:2px;">
                        :
                    </td>
                    <td style="border:1px solid #fff; padding:2px;" width="78%">
                        @foreach($tugaspokok as $key => $tugaspokok)
                            {{ strtoupper($tugaspokok['indikator']) }}
                        @endforeach
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:2px;">

                    <td style="border:1px solid #fff; padding:2px; vertical-align:top;" width="5%">
                        6. 
                    </td>
                    <td style="border:1px solid #fff; vertical-align:top; padding:2px;" width="15%">
                        Fungsi
                    </td>
                    <td width="2%" style="border:1px solid #fff; vertical-align:top; padding:2px;">
                        :
                    </td>
                    <td style="border:1px solid #fff; padding:2px;" width="78%">
                        <?php $i=1; ?>
                        @foreach($fungsi as $key => $fungsi)
                            {{ $i++.'. ' }}  {{ strtoupper($fungsi['indikator']) }} <br>
                        @endforeach 
                    </td>
                </tr>
                
        </table>
        </div>

        <pre style="page-break-before:always;"></pre>
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
                            Formulasi/Rumus Perhitungan
                        </th>
                        <th>
                            Sumber Data
                        </th>
                        <th>
                            Penanggung Jawab
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
                            {{ $perjanjian['formulasi'] }}
                        </td>
                        <td>
                            {{ $perjanjian['sumber_data'] }}
                        </td>
                        <td>
                            {{ $perjanjian['penanggung_jawab'] }}
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