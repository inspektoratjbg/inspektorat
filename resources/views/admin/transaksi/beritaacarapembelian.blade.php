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
        $bula = array (
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
    // echo $tanggal;
    // die();
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . ' ' . $bula[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    function splitbulan($bul){
        $b =tgl_indo('03/'.$bul.'/2017');
        $a = explode(" ", $b);
    return $a[1];
    }



    ?>
    <div class="container ">
        <table class="ttd">
            <tr style="border:1px solid #fff;">

                <td style="border:1px solid #fff; text-align:right; vertical-align: top;" width="65%">
                    <p><b>Lampiran :</b></p>
                </td>
                <td style="border:1px solid #fff;" width="35%">
                    <P><b>Berita Acara Penerimaan Barang</b></P>
                    <p><b>Alat Tulis Kantor (ATK)</b></p>
                    <p>Tanggal : {{ tgl_indo($tanggal) }}</p>
                    <p>Nomor : </p>
                </td>
            </tr>
        </table>
        <br>
        <table class="tabe">
            <thead style="margin:35px;">
                    <tr style="padding:0px;">
                        <th style="text-align:center;">
                            No.
                        </th>
                        <th style="text-align:center;">
                            Nama Barang
                        </th>
                        <th style="text-align:center;">
                            Banyaknya
                        </th>
                        <th style="text-align:center;">
                            Satuan Harga
                        </th>
                        <th style="text-align:center;">
                            Jumlah
                        </th>
                    </tr>
                    
                    <?php 
                        $i=1;
                        $jumlah=0;
                    ?>
                    @foreach($pembelian as $key => $pembelian)
                        <?php $jumlah+=($pembelian->barang_masuk*$pembelian->harga_satuan); ?>
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td style="text-align:center;">
                            {{ $pembelian->nama_barang }}
                        </td>
                        <td style="text-align:center;">
                            {{ $pembelian->barang_masuk." ".$pembelian->nama_satuan }}
                        </td>
                        <td style="text-align:right;">
                            {{ number_format($pembelian->harga_satuan, 2, ".", ",") }}
                        </td>
                        <td style="text-align:right;">
                            {{ number_format($pembelian->barang_masuk*$pembelian->harga_satuan, 2, ".", ",") }}
                        </td>
                      </tr>
                    @endforeach
                    
                    <tr style="padding:0px;">
                        <td colspan="4" style="text-align:center;">
                            <b>Jumlah</b>
                        </td>
                        <td style="text-align:right;">
                            <b>{{ number_format($jumlah, 2, ".", ",") }}</b>
                        </td>
                    </tr>

                </thead>
                <tbody>

                </tbody>
        </table>
        <br>
        <table class="ttd">
            
                <tr style="border:1px solid #fff;">

                    <td style="border:1px solid #fff;" width="65%">
                        <p>Yang Menyerahkan;</p>
                        <p>Penyedia Barang</p><br><br><br><br>  
                        <p style="text-decoration: underline;">_________________________</p>
                        <p></p>
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <P>Yang Menerima;</P>
                        <p>Pengurus Barang</p><br><br><br><br>  
                        <p style="text-decoration: underline;"><b>{{ $pengguna->nama_pegawai }}</b></p>
                        <p>NIP. {{ $pengguna->nip }}</p>
                    </td>
                </tr>
                
        </table>
    </div>
</body>
</html>
