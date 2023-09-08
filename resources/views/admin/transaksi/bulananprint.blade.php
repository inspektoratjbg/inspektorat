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
    $pecahkan = explode('/', $tanggal);

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

                    <td style="border:1px solid #fff;" width="20%">
                        <p>SKPD</p>
                        <p>KABUPATEN</p>
                        <p>PROVINSI</p>
                    </td>
                    <td style="border:1px solid #fff;" width="80%">
                        <p><b>: INSPEKTORAT</b></p> 
                        <p><b>: JOMBANG</b></p>
                        <p><b>: JAWA TIMUR</b></p>
                    </td>
                </tr>
                
        </table>
            <caption style="margin-bottom:10px;">
                BUKU BARANG PAKAI HABIS 
            </caption>
        <table class="tabe">
            <thead style="margin:35px;">
                    <tr style="padding:0px;">
                        <th rowspan="4" style="text-align:center;">
                            NO
                        </th>
                        <th colspan="8" style="text-align:center;">
                            PENERIMAAN
                        </th>
                        <th colspan="7" style="text-align:center;">
                            PENGELUARAN
                        </th>
                        <th rowspan="4" style="text-align:center;">
                            Ket.
                        </th>
                    </tr>
                    <tr style="padding:0px;">
                        <th rowspan="3" style="text-align:center;">
                            Tanggal Diterima
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Jenis/Nama Barang
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Merk/Ukuran
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Tahun Pembuatan
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Saldo Awal Bulan {{ ucfirst(splitbulan($bulan)) }}
                        </th>
                        <th rowspan="3" colspan="2" style="text-align:center;">
                            Jumlah Satuan/Barang
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Harga Satuan
                        </th>
                        <th colspan="5" style="text-align:center;">
                            Jumlah Satuan/Barang
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Sisa
                        </th>
                        <th rowspan="3" style="text-align:center;">
                            Tgl/No. Surat Penyerahan
                        </th>
                    </tr>
                    <tr style="padding:0px;">
                        <th colspan="5" style="text-align:center;">
                            Diserahkan Kepada
                        </th>
                    </tr>
                    <tr style="padding:0px;">
                        <th style="text-align:center;">
                            Irban Pemb
                        </th>
                        <th style="text-align:center;">
                            Irban Ekokes
                        </th>
                        <th style="text-align:center;">
                            Irban Keu
                        </th>
                        <th style="text-align:center;">
                            Irban Pemrt
                        </th>
                        <th style="text-align:center;">
                            Sekret
                        </th>
                    </tr>
                    <tr style="padding:0px;">
                        <th style="text-align:center;">
                            1
                        </th>
                        <th style="text-align:center;">
                            2
                        </th>
                        <th style="text-align:center;">
                            3
                        </th>
                        <th style="text-align:center;">
                            4
                        </th>
                        <th style="text-align:center;">
                            5
                        </th>
                        <th style="text-align:center;">
                            6
                        </th>
                        <th style="text-align:center;">
                            7
                        </th>
                        <th style="text-align:center;">
                            8
                        </th>
                        <th style="text-align:center;">
                            9
                        </th>
                        <th style="text-align:center;">
                            10
                        </th>
                        <th style="text-align:center;">
                            11
                        </th>
                        <th style="text-align:center;">
                            12
                        </th>
                        <th style="text-align:center;">
                            13
                        </th>
                        <th style="text-align:center;">
                            14
                        </th>
                        <th style="text-align:center;">
                            15
                        </th>
                        <th style="text-align:center;">
                            16
                        </th>
                        <th style="text-align:center;">
                            17
                        </th>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b>A.</b>
                        </td>
                        <td colspan="4" style="text-align:center;">
                            <b>ALAT TULIS KANTOR</b>
                        </td>
                        <td colspan="12" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0; 
                    ?>
                    @foreach($alattulis as $key => $alattulis)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td style="text-align:center;">
                            {{ date("Y/m/d") }}
                        </td>
                        <td>
                            {{ $alattulis->nama_barang }}
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['saldo_awal'] }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['barang_masuk'] }}</td>
                        <td style="text-align:center;">{{ $alattulis->nama_satuan }}</td>
                        <td style="text-align:center;">{{ number_format($alattulisvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['irban_pemb'] }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['irban_ek'] }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['irban_keu'] }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['irban_pem'] }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['sekret'] }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['sisa'] }}</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ number_format($alattulisvalue[$j]['sisa']*$alattulisvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                      </tr>
                      <?php $j++; ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                        </td>
                        <td colspan="2" style="text-align:center;">
                            <b>JUMLAH I</b>
                        </td>
                        <td></td>
                        <td></td>
                        <td colspan="10" style="text-align:center;">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b>B.</b>
                        </td>
                        <td colspan="4" style="text-align:center;">
                            <b>PERALATAN DAN BAHAN KEBERSIHAN</b>
                        </td>
                        <td colspan="12" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0; 
                    ?>
                    @foreach($alatkebersihan as $key => $alatkebersihan)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td style="text-align:center;">
                            {{ date("Y/m/d") }}
                        </td>
                        <td>
                            {{ $alatkebersihan->nama_barang }}
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['saldo_awal'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['barang_masuk'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ number_format($alatkebersihanvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['irban_pemb'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['irban_ek'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['irban_keu'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['irban_pem'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['sekret'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['sisa'] }}</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ number_format($alatkebersihanvalue[$j]['sisa']*$alatkebersihanvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                      
                      </tr>
                      <?php $j++; ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                        </td>
                        <td colspan="2" style="text-align:center;">
                            <b>JUMLAH II</b>
                        </td>
                        <td></td>
                        <td></td>
                        <td colspan="10" style="text-align:center;">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b>C.</b>
                        </td>
                        <td colspan="4" style="text-align:center;">
                            <b>BENDA POS (Materai)</b>
                        </td>
                        <td colspan="12" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0; 
                    ?>
                    @foreach($alatpos as $key => $alatpos)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td style="text-align:center;">
                            {{ date("Y/m/d") }}
                        </td>
                        <td>
                            {{ $alatpos->nama_barang }}
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['saldo_awal'] }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['barang_masuk'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ number_format($alatposvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['irban_pemb'] }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['irban_ek'] }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['irban_keu'] }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['irban_pem'] }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['sekret'] }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['sisa'] }}</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ number_format($alatposvalue[$j]['sisa']*$alatposvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                      
                      </tr>
                      <?php $j++; ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                        </td>
                        <td colspan="2" style="text-align:center;">
                            <b>JUMLAH III</b>
                        </td>
                        <td></td>
                        <td></td>
                        <td colspan="10" style="text-align:center;">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b>D.</b>
                        </td>
                        <td colspan="4" style="text-align:center;">
                            <b>PERALATAN LISTRIK</b>
                        </td>
                        <td colspan="12" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0; 
                    ?>
                    @foreach($alatlistrik as $key => $alatlistrik)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td style="text-align:center;">
                            {{ date("Y/m/d") }}
                        </td>
                        <td>
                            {{ $alatlistrik->nama_barang }}
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['saldo_awal'] }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['barang_masuk'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ number_format($alatlistrikvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['irban_pemb'] }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['irban_ek'] }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['irban_keu'] }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['irban_pem'] }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['sekret'] }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['sisa'] }}</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ number_format($alatlistrikvalue[$j]['sisa']*$alatlistrikvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                      
                      </tr>
                      <?php $j++; ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                        </td>
                        <td colspan="2" style="text-align:center;">
                            <b>JUMLAH IV</b>
                        </td>
                        <td></td>
                        <td></td>
                        <td colspan="10" style="text-align:center;">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b>E.</b>
                        </td>
                        <td colspan="4" style="text-align:center;">
                            <b>PERLENGKAPAN KOMPUTER</b>
                        </td>
                        <td colspan="12" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0; 
                    ?>
                    @foreach($alatkomputer as $key => $alatkomputer)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td style="text-align:center;">
                            {{ date("Y/m/d") }}
                        </td>
                        <td>
                            {{ $alatkomputer->nama_barang }}
                        </td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['saldo_awal'] }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['barang_masuk'] }}</td>
                        <td style="text-align:center;">{{ $alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ number_format($alatkomputervalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['irban_pemb'] }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['irban_ek'] }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['irban_keu'] }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['irban_pem'] }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['sekret'] }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['sisa'] }}</td>
                        <td style="text-align:center;">-</td>
                        <td style="text-align:center;">{{ number_format($alatkomputervalue[$j]['sisa']*$alatkomputervalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                      
                      </tr>
                      <?php $j++; ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                        </td>
                        <td colspan="2" style="text-align:center;">
                            <b>JUMLAH V</b>
                        </td>
                        <td></td>
                        <td></td>
                        <td colspan="10" style="text-align:center;">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                </thead>
                <tbody>

                </tbody>
        </table>
        <br>
        
        <table class="ttd">
            
                <tr style="border:1px solid #fff;">

                    <td style="border:1px solid #fff;" width="65%">
                        <br>
                        <p style="color: white;">.</p>
                        <p><b>INSPEKTUR KABUPATEN JOMBANG</b></p><br><br><br><br>  
                        <p style="text-decoration: underline;"><b>Drs. EKA SUPRASETYO AGUS PUTRANTO, MM</b></p>
                        <p>NIP. 196208251986111001 </p>
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <P>Jombang, {{ tgl_indo(date(date("d/m/Y"))) }}</P>
                        <p><b>PENGURUS BARANG</b></p><br><br><br><br>  
                        <p style="text-decoration: underline;"><b>{{ $pengguna->nama_pegawai }}</b></p>
                        <p>NIP. {{ $pengguna->nip }} </p>
                    </td>
                </tr>
                
        </table>
    </div>
</body>
</html>
