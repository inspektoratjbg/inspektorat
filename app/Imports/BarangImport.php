<?php

namespace App\Imports;

use App\pegawai;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BarangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'nama_barang'    => $row['nama'],
            'id_satuan'    => $row['satuan'],
            'harga_barang'    => $row['harga'],
            'id_jenis_barang'    => $row['jenis'],
        ]);
    }
}
