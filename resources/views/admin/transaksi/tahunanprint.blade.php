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

    return $pecahkan[0] . ' ' . $bula[ (int)$pecahkan[1] ] . ' ' . $pecahkan[2];
    }

    function splitbulan($bul){
        $b =tgl_indo('03/'.$bul.'/2017');
        $a = explode(" ", $b);
    return $a[1];
    }



    ?>
    <div class="container ">
            <caption style="margin-bottom:10px;">
                BERITA ACARA MUTASI PERSEDIAAN TAHUN {{ $tahun }}
            </caption>
        <table class="tabe">
            <thead style="margin:35px;">
                    <tr style="padding:0px;">
                        <th style="text-align:center;">
                            No
                        </th>
                        <th style="text-align:center;">
                            Uraian
                        </th>
                        <th style="text-align:center;">
                            Saldo Awal 01 Januari {{ $tahun }}
                        </th>
                        <th style="text-align:center;">
                            Penambahan {{ $tahun }}
                        </th>
                        <th style="text-align:center;">
                            Pengurangan {{ $tahun }}
                        </th>
                        <th style="text-align:center;">
                            Saldo Akhir 31 Desember {{ $tahun }}
                        </th>
                        <th style="text-align:center;">
                            Harga Satuan (Rp)
                        </th>
                        <th style="text-align:center;">
                            Nilai Saldo (Rp)
                        </th>
                        <th style="text-align:center;">
                            Ket
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
                            6=(3+4-5)
                        </th>
                        <th style="text-align:center;">
                            7
                        </th>
                        <th style="text-align:center;">
                            8=(6x7)
                        </th>
                        <th style="text-align:center;">
                            9
                        </th>                        
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b></b>
                        </td>
                        <td style="text-align:center;">
                            <b>ALAT TULIS KANTOR</b>
                        </td>
                        <td colspan="7" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0;
                        $jumlahalattulis=0;
                         
                    ?>
                    @foreach($alattulis as $key => $alattulis)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td>
                            {{ $alattulis->nama_barang }}
                        </td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['saldo_awal']." ".$alattulis->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['barang_masuk']." ".$alattulis->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['barang_keluar']." ".$alattulis->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alattulisvalue[$j]['sisa'] }}</td>
                        <td style="text-align:right;">{{ number_format($alattulisvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:right;">{{ number_format($gg=$alattulisvalue[$j]['sisa']*$alattulisvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td></td>
                      </tr>
                      <?php 
                      $j++;
                      $jumlahalattulis+=$gg;
                      ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;"></td>
                        <td colspan="6" style="text-align:center;">
                            <b>JUMLAH I</b>
                        </td>
                        <td style="text-align:right;">Rp. {{ number_format($jumlahalattulis, 2, ".", ",") }}</td>
                        <td></td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b></b>
                        </td>
                        <td style="text-align:center;">
                            <b>PERALATAN DAN BAHAN KEBERSIHAN</b>
                        </td>
                        <td colspan="7" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0;
                        $jumlahalatkebersihan=0;
                         
                    ?>
                    @foreach($alatkebersihan as $key => $alatkebersihan)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td>
                            {{ $alatkebersihan->nama_barang }}
                        </td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['saldo_awal']." ".$alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['barang_masuk']." ".$alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['barang_keluar']." ".$alatkebersihan->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatkebersihanvalue[$j]['sisa'] }}</td>
                        <td style="text-align:right;">{{ number_format($alatkebersihanvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:right;">{{ number_format($gg=$alatkebersihanvalue[$j]['sisa']*$alatkebersihanvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td></td>
                      </tr>
                      <?php 
                      $j++;
                      $jumlahalatkebersihan+=$gg;
                      ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;"></td>
                        <td colspan="6" style="text-align:center;">
                            <b>JUMLAH II</b>
                        </td>
                        <td style="text-align:right;">Rp. {{ number_format($jumlahalatkebersihan, 2, ".", ",") }}</td>
                        <td></td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b></b>
                        </td>
                        <td style="text-align:center;">
                            <b>BENDA POS (Materai)</b>
                        </td>
                        <td colspan="7" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0;
                        $jumlahalatpos=0;
                         
                    ?>
                    @foreach($alatpos as $key => $alatpos)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td>
                            {{ $alatpos->nama_barang }}
                        </td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['saldo_awal']." ".$alatpos->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['barang_masuk']." ".$alatpos->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['barang_keluar']." ".$alatpos->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatposvalue[$j]['sisa'] }}</td>
                        <td style="text-align:right;">{{ number_format($alatposvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:right;">{{ number_format($gg=$alatposvalue[$j]['sisa']*$alatposvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td></td>
                      </tr>
                      <?php 
                      $j++;
                      $jumlahalatpos+=$gg;
                      ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;"></td>
                        <td colspan="6" style="text-align:center;">
                            <b>JUMLAH III</b>
                        </td>
                        <td style="text-align:right;">Rp. {{ number_format($jumlahalatpos, 2, ".", ",") }}</td>
                        <td></td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b></b>
                        </td>
                        <td style="text-align:center;">
                            <b>PERALATAN LISTRIK</b>
                        </td>
                        <td colspan="7" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0;
                        $jumlahalatlistrik=0;
                         
                    ?>
                    @foreach($alatlistrik as $key => $alatlistrik)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td>
                            {{ $alatlistrik->nama_barang }}
                        </td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['saldo_awal']." ".$alatlistrik->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['barang_masuk']." ".$alatlistrik->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['barang_keluar']." ".$alatlistrik->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatlistrikvalue[$j]['sisa'] }}</td>
                        <td style="text-align:right;">{{ number_format($alatlistrikvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:right;">{{ number_format($gg=$alatlistrikvalue[$j]['sisa']*$alatlistrikvalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td></td>
                      </tr>
                      <?php 
                      $j++;
                      $jumlahalatlistrik+=$gg;
                      ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;"></td>
                        <td colspan="6" style="text-align:center;">
                            <b>JUMLAH IV</b>
                        </td>
                        <td style="text-align:right;">Rp. {{ number_format($jumlahalatlistrik, 2, ".", ",") }}</td>
                        <td></td>
                    </tr>
                    <tr style="padding:0px;">
                        <td style="text-align:center;">
                            <b></b>
                        </td>
                        <td style="text-align:center;">
                            <b>PERLENGKAPAN KOMPUTER</b>
                        </td>
                        <td colspan="7" style="text-align:center;">
                        </td>
                    </tr>
                    <?php 
                        $i=1;
                        $j=0;
                        $jumlahalatkomputer=0;
                         
                    ?>
                    @foreach($alatkomputer as $key => $alatkomputer)
                      <tr>
                        <td style="text-align:center;">
                            {{ $i++ }}
                        </td>
                        <td>
                            {{ $alatkomputer->nama_barang }}
                        </td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['saldo_awal']." ".$alatkomputer->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['barang_masuk']." ".$alatkomputer->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['barang_keluar']." ".$alatkomputer->nama_satuan }}</td>
                        <td style="text-align:center;">{{ $alatkomputervalue[$j]['sisa'] }}</td>
                        <td style="text-align:right;">{{ number_format($alatkomputervalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td style="text-align:right;">{{ number_format($gg=$alatkomputervalue[$j]['sisa']*$alatkomputervalue[$j]['harga_satuan'], 2, ".", ",") }}</td>
                        <td></td>
                      </tr>
                      <?php 
                      $j++;
                      $jumlahalatkomputer+=$gg;
                      ?>
                    @endforeach
                    <tr style="padding:0px;">
                        <td style="text-align:center;"></td>
                        <td colspan="6" style="text-align:center;">
                            <b>JUMLAH V</b>
                        </td>
                        <td style="text-align:right;">Rp. {{ number_format($jumlahalatkomputer, 2, ".", ",") }}</td>
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
                        
                    </td>
                    <td style="border:1px solid #fff;" width="35%">
                        <br>
                        <P>Jombang, {{ tgl_indo(date(date("d/m/Y"))) }}</P>
                        <p><b>INSPEKTUR KABUPATEN JOMBANG</b></p><br><br><br><br>  
                        <p style="text-decoration: underline;"><b>Drs. EKA SUPRASETYO AGUS PUTRANTO, MM</b></p>
                        <p>NIP. 196208251986111001 </p>
                    </td>
                </tr>
                
        </table>
    </div>
</body>
</html>
