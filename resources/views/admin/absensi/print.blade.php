<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perjanjian</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page { margin:0px; }
        body{
            font-family: Serif;
            color:#333;
            text-align:left;
            font-size:12px;
            margin:0px;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            margin-left:35px;
            margin-right:50px;
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
        ?>
    <div class="container ">
        <table class="tabe">
                <tbody>
                    <tr style="padding:0px; vertical-align: text-top;" height="30%">
                        <td width="50%">
                            <table style="border-bottom: 1px solid black" width="100%">
                                <tr>
                                    <td style="border:1px solid #fff;" width="15%">
                                        <img src="images/logo.jpg" style="width:50px; height:60px;  ">
                                    </td>
                                    <td style="border:1px solid #fff; text-align:center;" width="85%">
                                        <p>PEMERINTAH KABUPATEN JOMBANG</p>
                                        <p>INSPEKTORAT</p>
                                        <p>Alamat: Jl. Gatot Subroto 169 Telp. (0321)8614224 Kode Pos 61411</p>
                                    </td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align:center;">LEMBAR DISPOSISI</p>
                            <table width="100%">
                                <tr>
                                    <td style="border:1px solid #fff;" width="30%">
                                        Nomor Agenda
                                    </td>
                                    <td style="border:1px solid #fff; text-align:center;" width="2%">
                                        :
                                    </td>
                                    <td style="border:1px solid #fff; border-bottom: 1px solid black" width="68%">
                                         {{ $surat_masuk->no_agenda }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #fff;" width="30%">
                                        Surat dari
                                    </td>
                                    <td style="border:1px solid #fff; text-align:center;" width="2%">
                                        :
                                    </td>
                                    <td style="border:1px solid #fff; border-bottom: 1px solid black" width="68%">
                                        {{ $surat_masuk->pengirim }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #fff;" width="30%">
                                        Tanggal Surat
                                    </td>
                                    <td style="border:1px solid #fff; text-align:center;" width="2%">
                                        :
                                    </td>
                                    <td style="border:1px solid #fff; border-bottom: 1px solid black" width="68%">
                                        {{ tgl_indo(date($surat_masuk->tanggal_surat)) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #fff;" width="30%">
                                        Nomor Surat
                                    </td>
                                    <td style="border:1px solid #fff; text-align:center;" width="2%">
                                        :
                                    </td>
                                    <td style="border:1px solid #fff; border-bottom: 1px solid black" width="68%">
                                        {{ $surat_masuk->no_surat_masuk }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #fff;" width="30%">
                                        Diterima Tgl
                                    </td>
                                    <td style="border:1px solid #fff; text-align:center;" width="2%">
                                        :
                                    </td>
                                    <td style="border:1px solid #fff; border-bottom: 1px solid black" width="68%">
                                        {{ tgl_indo(date($surat_masuk->tanggal_masuk)) }}
                                    </td>
                                </tr>
                            </table>
                            <br>
                            Hal : <br>
                            {{ $surat_masuk->hal_surat }}
                        </td>
                        <td width="50%" >
                            <p>Diteruskan Kepada :</p>
                            <table width="100%">
                                <tr style="border:1px solid #fff;">

                                    <td style="border:1px solid #fff;" width="50%">
                                        1. Sekretaris<br>
                                        2. Irban Keuangan<br>
                                        3. Irban Investigasi<br>
                                        4. Irban Pembangunan
                                    </td>
                                    <td style="border:1px solid #fff;" valign="top" width="50%">
                                        5. Irban Pemerintahan & Eko Kesra
                                    </td>
                                </tr>
                            </table>
                            <table style="border-bottom: 1px solid black" width="100%">

                            </table>
                            <table width="100%">
                              <tr style="border:1px solid #fff;">
                                  <td style="border:1px solid #fff;" >
                                      <u><p align="center">ISI DISPOSISI</p></u>
                                      <br><br>
                                  </td>
                              </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
        </table>
        <br>

    </div>
</body>
</html>
