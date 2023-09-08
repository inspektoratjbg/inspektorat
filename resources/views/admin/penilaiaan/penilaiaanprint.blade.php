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
        
        $hey=0;
        $jumlah=count($perjanjian);
        foreach ($perjanjian as $key => $perjanjian) {
            $x=((($perjanjian['skp_realisasi_ouput']/$perjanjian['target'])*100)+(($perjanjian['skp_realisasi_mutu']/$perjanjian['skp_target_mutu'])*100)+(($perjanjian['skp_realisasi_waktu']/$perjanjian['skp_target_waktu'])*100));
            $hey=$hey+(round(($x/3),2));
        }
        $sasaran = $hey/$jumlah;

        ?>
        <div class="container">
            <table width="100%">
                <tr style="border:1px solid #fff;">
                    <td style="border:1px solid #fff; vertical-align: top; text-align: left;" width="50%">
                        <table class="tabe">
                                <tr style="padding:0px;">
                                    <td rowspan="11" width="5%" style="text-align:center; vertical-align: top;">
                                        4.
                                    </td>
                                    <td colspan="4" width="80%">
                                        UNSUR YANG DINILAI
                                    </td>
                                    <td width="15%" style="text-align:center;">
                                        Jumlah
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td colspan="4" width="80%">
                                        a. Sasaran Kerja Pegawai ( {{ round($sasaran,2) }} x 60% )
                                    </td>
                                    <td width="15%" style="text-align:center;">
                                        {{ $sasaran=round(($sasaran*0.6),2) }}
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td width="25%" rowspan="9">
                                        b. Perilaku Kerja
                                    </td>
                                    <td width="30%">
                                        1. Orientasi Pelayanan
                                    </td>
                                    <td width="10%" style="text-align:center;">
                                        {{ $nilai->pelayanan }}
                                    </td>
                                    <td width="15%" style="text-align:center;">
                                        @if($nilai->pelayanan<=50)
                                            (Buruk)
                                        @elseif($nilai->pelayanan<=60)
                                            (Sedang)
                                        @elseif($nilai->pelayanan<=75)
                                            (Cukup)
                                        @elseif($nilai->pelayanan<=90.99)
                                            (Baik)
                                        @else
                                            (Sangat Baik)
                                        @endif
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        2. Integritas
                                    </td>
                                    <td style="text-align:center;">
                                        {{ $nilai->integritas }}
                                    </td>
                                    <td style="text-align:center;">
                                        @if($nilai->integritas<=50)
                                            (Buruk)
                                        @elseif($nilai->integritas<=60)
                                            (Sedang)
                                        @elseif($nilai->integritas<=75)
                                            (Cukup)
                                        @elseif($nilai->integritas<=90.99)
                                            (Baik)
                                        @else
                                            (Sangat Baik)
                                        @endif
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        3. Komitmen
                                    </td>
                                    <td style="text-align:center;">
                                        {{ $nilai->komitmen }}
                                    </td>
                                    <td style="text-align:center;">
                                        @if($nilai->komitmen<=50)
                                            (Buruk)
                                        @elseif($nilai->komitmen<=60)
                                            (Sedang)
                                        @elseif($nilai->komitmen<=75)
                                            (Cukup)
                                        @elseif($nilai->komitmen<=90.99)
                                            (Baik)
                                        @else
                                            (Sangat Baik)
                                        @endif
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        4. Disiplin
                                    </td>
                                    <td style="text-align:center;">
                                        {{ $nilai->disiplin }}
                                    </td>
                                    <td style="text-align:center;">
                                        @if($nilai->disiplin<=50)
                                            (Buruk)
                                        @elseif($nilai->disiplin<=60)
                                            (Sedang)
                                        @elseif($nilai->disiplin<=75)
                                            (Cukup)
                                        @elseif($nilai->disiplin<=90.99)
                                            (Baik)
                                        @else
                                            (Sangat Baik)
                                        @endif
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        5. Kerjasama
                                    </td>
                                    <td style="text-align:center;">
                                        {{ $nilai->kerjasama }}
                                    </td>
                                    <td style="text-align:center;">
                                        @if($nilai->kerjasama<=50)
                                            (Buruk)
                                        @elseif($nilai->kerjasama<=60)
                                            (Sedang)
                                        @elseif($nilai->kerjasama<=75)
                                            (Cukup)
                                        @elseif($nilai->kerjasama<=90.99)
                                            (Baik)
                                        @else
                                            (Sangat Baik)
                                        @endif
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        6. Kepemimpinan
                                    </td>
                                    <td style="text-align:center;">
                                        {{ $nilai->kepemimpinan }}
                                    </td>
                                    <td style="text-align:center;">
                                        @if(is_numeric($nilai->kepemimpinan))
                                            @if($nilai->kepemimpinan<=50)
                                                (Buruk)
                                            @elseif($nilai->kepemimpinan<=60)
                                                (Sedang)
                                            @elseif($nilai->kepemimpinan<=75)
                                                (Cukup)
                                            @elseif($nilai->kepemimpinan<=90.99)
                                                (Baik)
                                            @else
                                                (Sangat Baik)
                                            @endif
                                        @else
                                            -
                                        @endif
                                        
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        7. Jumlah
                                    </td>
                                    <td style="text-align:center;">
                                        <?php 
                                            $x=0;
                                            $jk=0;
                                            if (is_numeric($nilai->pelayanan)) {
                                                $x=$x+$nilai->pelayanan;
                                                $jk=$jk+1;
                                            }
                                            if (is_numeric($nilai->integritas)) {
                                                $x=$x+$nilai->integritas;
                                                $jk=$jk+1;
                                            }
                                            if (is_numeric($nilai->komitmen)) {
                                                $x=$x+$nilai->komitmen;
                                                $jk=$jk+1;
                                            }
                                            if (is_numeric($nilai->disiplin)) {
                                                $x=$x+$nilai->disiplin;
                                                $jk=$jk+1;
                                            }
                                            if (is_numeric($nilai->kerjasama)) {
                                                $x=$x+$nilai->kerjasama;
                                                $jk=$jk+1;
                                            }
                                            if (is_numeric($nilai->kepemimpinan)) {
                                                $x=$x+$nilai->kepemimpinan;
                                                $jk=$jk+1;
                                            }
                                            $juml=round($x/$jk,2);
                                        
                                        ?>
                                        
                                        {{ $x }}
                                    </td>
                                    <td style="text-align:center;">
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td>
                                        8. Nilai Rata-rata
                                    </td>
                                    <td style="text-align:center;">
                                        {{ $juml }}
                                    </td>
                                    <td style="text-align:center;">
                                        @if(is_numeric($juml))
                                            @if($juml<=50)
                                                (Buruk)
                                            @elseif($juml<=60)
                                                (Sedang)
                                            @elseif($juml<=75)
                                                (Cukup)
                                            @elseif($juml<=90.99)
                                                (Baik)
                                            @else
                                                (Sangat Baik)
                                            @endif
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td width="15%">
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td colspan="3">
                                        Nilai Perilaku Kerja ( {{ $juml }} x 40% )
                                    </td>
                                    <td width="15%" style="text-align:center;">
                                        {{ round($juml*0.4,2) }}
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td colspan="5" rowspan="2" style="text-align:center;">
                                        NILAI PRESTASI KERJA
                                    </td>
                                    <td width="15%" style="text-align:center;">
                                        {{ $juml=$sasaran+round($juml*0.4,2) }}
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td width="15%" style="text-align:center;">
                                            @if($juml<=50)
                                                (Buruk)
                                            @elseif($juml<=60)
                                                (Sedang)
                                            @elseif($juml<=75)
                                                (Cukup)
                                            @elseif($juml<=90.99)
                                                (Baik)
                                            @else
                                                (Sangat Baik)
                                            @endif
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td colspan="6" width="15%" height="300px" style="vertical-align: top; text-align: left;">
                                        5. KEBERATAN DARI PEGAWAI NEGERI SIPIL YANG DINILAI (APABILA ADA)
                                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        <table width="100%">
                                                <tr>
                                                    <td style="border:1px solid #fff; vertical-align: top; text-align: center;"><b>Tanggal, ..................................</b></td>
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                                
                                
                        </table>
                    </td>
                    <td style="border:1px solid #fff; vertical-align: top; text-align: left;" width="50%">
                        <table class="tabe" >
                            <tr>
                                <td width="100%" height="250px" style="vertical-align: top; text-align: left;">
                                    6. TANGGAPAN PENJABAT PENILAI ATAS KEBERATAN
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <table width="100%">
                                            <tr>
                                                <td style="border:1px solid #fff; vertical-align: top; text-align: center;"><b>Tanggal, ..................................</b></td>
                                            </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" height="367px" style="vertical-align: top; text-align: left;">
                                    7. KEPUTUSAN ATASAN PENJABAT PENILAI ATAS KEBERATAN
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <table width="100%">
                                            <tr>
                                                <td style="border:1px solid #fff; vertical-align: top; text-align: center;"><b>Tanggal, ..................................</b></td>
                                            </tr>
                                    </table>
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        
        <pre style="page-break-before:always;"></pre>
        
        <div class="container">
            <table width="100%">
                <tr style="border:1px solid #fff;">
                    <td style="border:1px solid #fff; vertical-align: top; text-align: left;" width="50%">
                        <table class="tabe">
                                <tr style="padding:0px;">
                                    <td colspan="6" width="15%" height="200px" style="vertical-align: top; text-align: left;">
                                        <b>8. REKOMENDASI</b> 
                                    </td>
                                </tr>
                                <tr style="padding:0px;">
                                    <td colspan="6" width="15%" height="417px" style="vertical-align: top; text-align: left;">
                                        <table width="100%">
                                                <tr>
                                                    <td style="border:1px solid #fff;" width="40%"></td>
                                                    <td style="border:1px solid #fff; vertical-align: top; text-align: center;" width="60%">
                                                        <b>9. DIBUAT TANGGAL, {{ strtoupper(tgl_indo(date($sakip->tanggal_surat))) }}</b><br>
                                                        <b>PEJABAT PENILAI</b>
                                                        <br><br><br><br><br>
                                                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_kedua }}</p>
                                                         <p>{{ $sakip->nip_pihak_kedua }}</p>
                                                    </td>
                                                </tr>
                                        </table><br>
                                        <table width="100%">
                                                <tr>
                                                    
                                                    <td style="border:1px solid #fff; vertical-align: top; text-align: center;" width="60%">
                                                        <b>10. DITERIMA TANGGAL, {{ strtoupper(tgl_indo(date($sakip->tanggal_surat))) }}</b><br>
                                                        <b>PEGAWAI NEGERI SIPIL YANG DINILAI</b>
                                                        <br><br><br><br><br>
                                                        <p style="text-decoration: underline;">{{ $sakip->nama_pihak_pertama }}</p>
                                                         <p>{{ $sakip->nip_pihak_pertama }}</p>
                                                    </td>
                                                    <td style="border:1px solid #fff;" width="40%"></td>
                                                </tr>
                                        </table><br>
                                        <table width="100%">
                                                <tr>
                                                    <td style="border:1px solid #fff;" width="40%"></td>
                                                    <td style="border:1px solid #fff; vertical-align: top; text-align: center;" width="60%">
                                                        <b>11. DITERIMA TANGGAL, {{ strtoupper(tgl_indo(date($sakip->tanggal_surat))) }}</b><br>
                                                        <b>ATASAN PENJABAT PENILAI</b>
                                                        <br><br><br><br><br>
                                                        <p style="text-decoration: underline;">{{ $kepala->nama_pegawai }}</p>
                                                         <p>{{ $kepala->nip }}</p>
                                                    </td>
                                                </tr>
                                        </table>
                                        
                                    </td>
                                </tr>
                                
                                
                        </table>
                    </td>
                    <td style="border:1px solid #fff; vertical-align: top; text-align: left;" width="50%">
                        <table class="tabe" >
                            <tr>
                                <td width="100%" height="631px" style="vertical-align: top; text-align: center; border:1px solid #fff;">
                                    <div style="text-align: center;">
                                        <br>
                                        <img src="images/logo-garuda.png" style="width:50px;"><br><br>
                                    </div>
                                    <b>PENILAIAAN PRESTASI KERJA</b><br>
                                    <b>PEGAWAI NEGERI SIPIL</b>
                                    
                                    <table width="100%">
                                            <tr>
                                                <td style="border:1px solid #fff;" width="50%">
                                                    PEMERINTAH KABUPATEN JOMBANG <br>
                                                    INSPEKTORAT
                                                </td>
                                                <td style="border:1px solid #fff;" width="50%">
                                                    JANGKA WAKTU PENILAIAAN <br>
                                                    BULAN : 02 Januari s/d 31 Desember {{ $sakip->tahun }}
                                                </td>
                                            </tr>
                                    </table>
                                    <table class="tabe" width="100%">
                                            <tr>
                                                <td style="vertical-align: top; text-align: left;" rowspan="6" width="5%">
                                                    1.
                                                </td>
                                                <td colspan="2" width="95%">
                                                    YANG DINILAI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    a. Nama
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->nama_pihak_pertama }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    b. NIP
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->nip_pihak_pertama }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    c. Pangkat, Golongan ruang, TMT
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->golongan_pihak_pertama }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    d. Jabatan/Pekerjaan
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->jabatan_pihak_pertama }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    c. Unit Organisasi
                                                </td>
                                                <td width="60%">
                                                    Inspektorat Kabupaten Jombang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top; text-align: left;" rowspan="6" width="5%">
                                                    2.
                                                </td>
                                                <td colspan="2" width="95%">
                                                    PENJABAT PENILAI NILAI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    a. Nama
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->nama_pihak_kedua }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    b. NIP
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->nip_pihak_kedua }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    c. Pangkat, Golongan ruang, TMT
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->golongan_pihak_kedua }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    d. Jabatan/Pekerjaan
                                                </td>
                                                <td width="60%">
                                                    {{ $sakip->jabatan_pihak_kedua }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    c. Unit Organisasi
                                                </td>
                                                <td width="60%">
                                                    Inspektorat Kabupaten Jombang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top; text-align: left;" rowspan="6" width="5%">
                                                    3.
                                                </td>
                                                <td colspan="2" width="95%">
                                                    ATASAN PENJABAT PENILAI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    a. Nama
                                                </td>
                                                <td width="60%">
                                                    {{ $kepala->nama_pegawai }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    b. NIP
                                                </td>
                                                <td width="60%">
                                                    {{ $kepala->nip }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    c. Pangkat, Golongan ruang, TMT
                                                </td>
                                                <td width="60%">
                                                    {{ $kepala->nama_golongan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    d. Jabatan/Pekerjaan
                                                </td>
                                                <td width="60%">
                                                    {{ $kepala->nama_jabatan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="35%">
                                                    c. Unit Organisasi
                                                </td>
                                                <td width="60%">
                                                    Inspektorat Kabupaten Jombang
                                                </td>
                                            </tr>
                                    </table>
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        
        
</body>
</html>