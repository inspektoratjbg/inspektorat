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
        <br><br>
        <div style="text-align: center;">
            <img src="images/atas.png" style="width:20%;"><br>
        </div><br>
        <table style=" border: 5px solid #799FCB; " width="100%">
            <tr>
                <td><h2 style="text-align:center; ">LAPORAN KINERJA {{ $sakip->tahun }}</h2></td>
            </tr>
        </table><br>
        <caption>
            {{ strtoupper($sakip->jabatan_pihak_pertama) }}
        </caption>
        <caption>
            INSPEKTORAT
        </caption>
        <caption style="margin-bottom:25px;">
            PADA INSPEKTORAT KABUPATEN JOMBANG
        </caption><br>
        <div style="text-align: center;">
            <img src="images/bawah.png" style="width:10%;"><br>
        </div><br><br>
        <div style="text-align: center;">
            <img src="images/logo.jpg" style="width:20%;"><br>
        </div>

        <pre style="page-break-before:always;"></pre>
        <div style="text-align:center;">
            <b>BAB I</b><br>
            <b>PENDAHULUAN</b><br><br>
        </div>
        <div style="text-align: justify;">
            <table class="ttd" style="text-align: justify;">
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>A. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>PENGERTIAN PELAPORAN KINERJA</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Salah satu tahapan dari Implementasi Sistem Akuntabilitas Kinerja Instansi Pemerintah adalah Pelaporan Kinerja yang merupakan bentuk akuntabilitas pelaksanaan tugas dan fungsi yang dipercayakan kepada setiap intansi pemerintah atas penggunaan anggaran yang dipercayakan oleh atasan kepada bawahan sebagaimana tertuang dalam dokumen Perjanjian Kinerja yang telah dibuat dan disepakati. </span><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Hal terpenting yang diperlukan dalam penyusunan laporan kinerja adalah pengukuran kinerja dan evaluasi serta pengungkapan secara memadai hasil analisis terhadap pengukuran kinerja. </span><br><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>B. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>TUJUAN PENYUSUNAN LAPORAN KINERJA</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td colspan="3" style="border:1px solid #fff; padding:1px;">
                        <ol>
                            <li>Memberikan informasi kinerja yang terukur kepada pemberi mandat atas kinerja yang telah dan seharusnya dicapai.</li>
                            <li>Memberikan informasi kinerja yang terukur kepada pemberi mandat atas kinerja yang telah dan seharusnya dicapai.</li>
                        </ol>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>C. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>TUGAS POKOK DAN FUNGSI SUB BAGIAN PENINGKATAN KINERJA</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Sebagaimana Peraturan Bupati Jombang Nomor 20 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Tugas Pokok dan Fungsi Serta Tata Kerja Inspektorat Kabupaten Jombang, maka {{ $sakip->jabatan_pihak_pertama }} mempunyai tugas :</span><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td colspan="3" style="border:1px solid #fff; padding:1px;">
                        <ol type='a'>
                            @foreach($tugaspokok as $key => $tugaspokok)
                                <li>{{ $tugaspokok['indikator'] }}</li>
                            @endforeach
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
        <pre style="page-break-before:always;"></pre>
        <div style="text-align:center;">
            <b>BAB II</b><br>
            <b>AKUNTABILITAS KINERJA JABATAN</b><br><br>
        </div>
        <div style="text-align: justify;">
            <table class="ttd" style="text-align: justify;">
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>A. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>PERJANJIAN KINERJA</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Dalam rangka mewujudkan manajemen pemerintahan yang efektif, transparan dan akuntabel serta berorientasi pada hasil, maka {{ $sakip->nama_pihak_pertama }} melaksanakan program dan kegiatan yang tertuang dalam perjanjian kinerja sebagai berikut : </span><br><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px; text-align:center;">
                        <caption>PERJANJIAN KINERJA PERUBAHAN TAHUN {{ $sakip->tahun }}</caption><br>
                        <caption>{{ $sakip->jabatan_pihak_pertama }}</caption><br>
                        <caption>INSPEKTORAT KABUPATEN JOMBANG</caption><br><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span></span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
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
                        </table><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px; text-align:center;">
                    @if ($program!=null)
                    <table class="tabe">
                            <thead style="margin:35px;">
                                <tr align="center">
                                    <th>
                                        NO
                                    </th>
                                    <th>
                                        KEGIATAN
                                    </th>
                                    <th>
                                        ANGGARAN
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; $jumlah=0; ?>
                                @foreach($program as $key => $program)
                                <tr>
                                    <td align="center">
                                        {{ $i++ }}
                                    </td>
                                    <td width="70%">
                                        {{ $program['program'] }}
                                    </td>
                                    <td width="30%">
                                        {{ "Rp ".number_format($program['anggaran'],2,',','.') }}
                                    </td>
                                </tr>
                                <?php $jumlah=$jumlah+$program['anggaran']; ?>
                                @endforeach
                                <tr>
                                    <td align="center">
                                    </td>
                                    <td width="70%">
                                        JUMLAH
                                    </td>
                                    <td width="30%">
                                        {{ "Rp ".number_format($jumlah,2,',','.') }}
                                    </td>
                                </tr>
                            </tbody>  
                        </table><br>    
                    @endif
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>B. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>CAPAIAAN KINERJA</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Pengukuran kinerja dilakukan dengan membandingkan antara kinerja yang terealisasi dengan kinerja yang ditargetkan. Pada tahun {{ $sakip->tahun }} capaian kinerja dari {{ $sakip->nama_pihak_pertama }} adalah sebagai berikut :</span><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px; text-align:center;">
                        <b>Tabel 2.1. Capaian Kinerja dan penyerapan Anggaran Tahun {{ $sakip->tahun }} {{ $sakip->nama_pihak_pertama }}</b> <br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px; text-align:center;">
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
                            <?php $a=0; ?>
                            @foreach($capaian as $key => $perjanjian)

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
                                <td style="text-align:center;">
                                    {{ $perjanjian['target'].' '.$perjanjian['satuan'] }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $perjanjian['realisasi'].' '.$perjanjian['satuan'] }}
                                </td>
                                <td>
                                    {{ round($perjanjian['capaian'],2).' %' }}
                                </td>
                            </tr>
                            <?php $a = $a+$perjanjian['capaian']; ?>
                            @endforeach
                            <tr>
                                <td>
                                </td>
                                <td colspan="5" style="text-align:center;">
                                    RATA-RATA CAPAIAN
                                </td>
                                <td>
                                    {{ $a/count($capaian).' %' }}
                                </td>
                            </tr>
                        </tbody>  
                    </table>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px; text-align:center;">
                        <span>Penyerapan anggaran pada masing-masing kegiatan adalah sebagai berikut:</span> <br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px; text-align:center;">
                    <table class="tabe">
                        <thead style="margin:35px;">
                            <tr align="center">
                                <th>
                                    NO
                                </th>
                                <th>
                                    KEGIATAN
                                </th>
                                <th>
                                    ANGGARAN
                                </th>
                                <th>
                                    REALISASI
                                </th>
                                <th>
                                    % PENYERAPAN
                                </th>
                            </tr>
                        </thead>
                    </table>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>C. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>EVALUASI DAN ANALISIS KINERJA</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Berdasarkan tabel 2.1 maka dapat disimpulkan seluruh kegiatan telah memenuhi target yang di tetapkan.</span><br>
                        <ol type="a">
                            <li>Program dan Kegiatan yang telah memenuhi target yang ditetapkan yaitu : </li>
                            <ol type="1">
                                <li>Program Peningkatan Kinerja Pemerintah Daerah </li>
                                <dt>
                                    <dd>- Kegiatan Penyusunan Penetapan Kinerja Pemerintah Daerah dengan target 1 dokumen Perjanjian Kinerja Tersusun dan terealisasi sesuai dengan yang ditetapkan.</dd>
                                    <dd>- Kegiatan Penyusunan Laporan Akuntabilitas Kinerja Instansi Pemerintah Daerah dengan target  1 dokumen Laporan Akuntabilitas Kinerja Instansi Pemerintah tersusun dan terealisasi sesuai dengan yang ditetapkan.</dd>
                                    <dd>- Kegiatan Penyusunan Indikator Kinerja Utama dengan target 1 dokumen  Penetapan IKU tersusun dan terealisasi sesuai dengan target yang ditetapkan. </dd>
                                </dt>
                                <li>Program Perencanaan Strategis dan Pelaporan Capaian Kinerja serta Keuangan SKPD : </li>
                                <dt>
                                    <dd>- Kegiatan Penyusunan Rencana Strategis SKPD dengan target 1 dokumen Rencana Strategis Sekretariat Daerah yang tersusun dan terealisasi sesuai target.</dd>
                                    <dd>- Kegiatan Penyusunan Rencana Kerja SKPD dengan target 1 dokumen Rencana Strategis Sekretariat Daerah yang tersusun dan terealisasi sesuai target.</dd>
                                    <dd>- Kegiatan Penyusunan Laporan Capaian Kinerja SKPD  dengan target 1 dokumen LKJIP Sekretariat Daerah dan 4 Laporan Evaluasi Renja, terealisasi sesuai dengan target yang ditetapkan.</dd>
                                </dt>
                            </ol>
                            <li>Faktor – faktor yang mempengaruhi terpenuhinya target : </li>
                            <ol>
                                <li>Pendampingan kepada OPD secara continue terkait implementasi SAKIP</li>
                                <li>Ketepatan waktu dan komitmen OPD dalam mengumpulkan dokumen – dokumen bahan penyusunan PK, IKU, LKjIP.</li>
                                <li>Pemahaman yang semakin baik mengenai Implementasi SAKIP</li>
                            </ol>
                            <li>Kendala dan Hambatan : </li>
                            <ol>
                                <li>Kurangnya kualitas dan kuantitas serta profesionalisme aparatur pelaksana.</li>
                                <li>Kurang optimalnya pemanfaatan teknologi informasi yang ada.</li>
                                <li>Kurangnya inovasi, efektivitas program dan kegiatan.</li>
                            </ol>
                        </ol>
                    </td>
                </tr>

                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>D. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>RENCANA TINDAK LANJUT</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span></span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span>Untuk menangani kendala-kendala yang ada maka dilaksanakan dengan langkah-langkah sebagai berikut :</span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td colspan="3" style="border:1px solid #fff; padding:1px;">
                        <ol>
                            <li>Perlunya keseragaman persepsi terhadap sistematika dan tata cara penyusunan dokumen SAKIP melalui PERBUP SAKIP.</li>
                            <li>Pendampingan kepada OPD secara continue dalam implementasi SAKIP.</li>
                            <li>Sinkronisasi dan koordinasi terkait keterpaduan perencanaan.</li>
                            <li>Mengembangkan dan terus berinovasi terkait efektifitas program dan kegiatan.</li>
                        </ol>
                    </td>
                </tr>

                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span>E. </span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>Tanggapan Atasan Langsung</b></span>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;" width="4%">
                        <span></span>
                    </td>
                    <td colspan="2" style="border:1px solid #fff; padding:1px;" width="96%">
                        <span><b>RUANG TANGGAPAN (DISPOSISI) ATASAN LANGSUNG</b></span>
                    </td>
                </tr>
                    
            </table>

            
        </div>

        <pre style="page-break-before:always;"></pre>
        <div style="text-align:center;">
            <b>BAB III</b><br>
            <b>PENUTUP</b><br><br>
        </div>
        
        <table class="ttd" style="text-align: justify;">
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Pada tahun {{ $sakip->tahun }} {{ $sakip->jabatan_pihak_pertama }} Inspektorat Kabupaten Jombang melaksanakan {{ count($penutup) }} kegiatan. Seluruh kegiatan tersebut berhasil terealisasi 100% sesuai dengan target yang ditetapkan dengan penyerapan anggaran 83,42%. Sehingga terdapat efisiensi sebesar 16,58%. </span><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Keberhasilan Sub Bagian Peningkatan Kinerja ini tidak terlepas dari upaya – upaya yang telah dilakukan antara lain pendampingan OPD oleh Tim Penerapan SAKIP Kabupaten Jombang secara continue sehingga setiap aparatur pelaksana memiliki pemahaman Implementasi SAKIP yang semakin membaik. Selain itu komitmen dan ketepatan waktu dalam pengumpulan dokumen bahan penyusunan PK, IKU, LKjIP sangat mendukung keberhasilan dalam pencapaian target. </span><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Ke depan masih terdapat beberapa tantangan yang harus dilewati dalam Implementasi SAKIP. Sehingga tetap perlu dilakukan inovasi – inovasi terkait efektifitas program dan kegiatan serta tetap berkoordinasi dengan OPD – OPD.</span><br>
                    </td>
                </tr>
                <tr style="border:1px solid #fff; padding:1px;">
                    <td style="border:1px solid #fff; padding:1px;">
                        <span style="margin-left:40px;">Demikian laporan kinerja ini dibuat, diharapkan dapat memberikan gambaran capaian kinerja Sub Bagian Peningkatan Kinerja Bagian Organisasi Sekretariat Daerah Kabupaten Jombang dan menjadi bahan evaluasi bagi peningkatan kinerja ditahun mendatang.</span><br>
                    </td>
                </tr>
        </table>

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
    </div>
</body>
</html>