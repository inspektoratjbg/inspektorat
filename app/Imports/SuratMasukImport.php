<?php

namespace App\Imports;

use App\pegawai;
use Illuminate\Support\Facades\Auth;
use App\SuratMasuk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SuratMasukImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // echo print_r($row);
        // die();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        if($row['pengolah']!=null){
          $pengolah=$row['pengolah'];
        }else{
          $pengolah='';
        }
        if($row['nomor_surat']!=null){
          $nomor_surat=$row['nomor_surat'];
        }else{
          $nomor_surat='';
        }
        $tgl1 = explode("/", $row['tgl_surat']);
        $tgl2 = explode("/", $row['tgl_terima']);

        return new SuratMasuk([
            'no_agenda' => $row['no_urt'],
            'lampiran' => '',
            'disposisi' => '',
            'isi_disposisi' => '',
            'pengirim'    => $row['pengirim'],
            'no_surat_masuk'    => $nomor_surat,
            'tanggal_surat'    => $tgl1[2].'-'.$tgl1[0].'-'.$tgl1[1],
            'tanggal_masuk'    => $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1],
            'hal_surat'    => $row['isi_ringkasan'],
            'created_by'    => $pengguna['nama_pegawai'],
            'pengolah' => $pengolah,
        ]);
    }
}
