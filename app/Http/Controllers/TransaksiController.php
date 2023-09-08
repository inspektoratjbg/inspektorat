<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Satuan;
use App\Jenistransaksi;
use App\pegawai;
use App\Transaksi;
use PDF;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $transaksi = DB::table('tb_inventaris_transaksi')
              ->join('tb_inventaris_barang', 'tb_inventaris_barang.id', '=', 'tb_inventaris_transaksi.id_barang')
              ->select('tb_inventaris_transaksi.*', 'tb_inventaris_barang.nama_barang')
              ->get();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.transaksi.index', compact(['transaksi', 'pengguna']));
  }

  /**
   * Show the form for creating new User.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $barang = Barang::all();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.transaksi.create', compact(['pengguna', 'barang']));
  }

  /**
   * Store a newly created User in storage.
   *
   * @param  \App\Http\Requests\StoreUsersRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $this->validate($request, [
          'tanggal_diterima' => 'required',
          'id_barang' => 'required',
          'created_by' => 'required',
      ]);


      $harga_satuan = Barang::where('id', $request->id_barang)->first();
      $satuan=$harga_satuan;
      if ($request->harga_satuan!=null) {
        $harga_satuan=$request->harga_satuan;
        $barang = Barang::find($request->id_barang);
        $barang->harga_barang = $harga_satuan;
        $barang->save();
      }else{
        $harga_satuan=$harga_satuan->harga_barang;
      }

      $saldo_awal = Transaksi::where('id_barang', $request->id_barang)->latest('id')->first();
      if ($saldo_awal!=null) {
        $saldo_awal=$saldo_awal->sisa;
      }else{
        $saldo_awal=0;
      }

      if($request->barang_masuk!=null){
        $barang_masuk=$request->barang_masuk;
      }else{
        $barang_masuk=0;
      }

      if($request->irban_pemb!=null){
        $irban_pemb=$request->irban_pemb;
      }else{
        $irban_pemb=0;
      }

      if($request->irban_ek!=null){
        $irban_ek=$request->irban_ek;
      }else{
        $irban_ek=0;
      }

      if($request->irban_keu!=null){
        $irban_keu=$request->irban_keu;
      }else{
        $irban_keu=0;
      }

      if($request->irban_pem!=null){
        $irban_pem=$request->irban_pem;
      }else{
        $irban_pem=0;
      }

      if($request->sekret!=null){
        $sekret=$request->sekret;
      }else{
        $sekret=0;
      }

      if($request->no_surat!=null){
        $no_surat=$request->no_surat;
      }else{
        $no_surat='-';
      }

      $sisa = ($saldo_awal+$barang_masuk)-($irban_pemb+$irban_ek+$irban_keu+$irban_pem+$sekret);

      $keterangan = $request->harga_satuan*$sisa;

      transaksi::create([
          'tanggal_diterima' => $request->tanggal_diterima,
          'id_barang' => $request->id_barang,
          'harga_satuan' => $harga_satuan,
          'id_satuan' => $satuan->id_satuan,
          'created_by' => $request->created_by,
          'merk' =>'-',
          'tahun_pembuatan' =>'2020-03-05',
          'saldo_awal' =>$saldo_awal,
          'barang_masuk' =>$barang_masuk,
          'irban_pemb' =>$irban_pemb,
          'irban_ek' =>$irban_ek,
          'irban_keu' =>$irban_keu,
          'irban_pem' =>$irban_pem,
          'sekret' =>$sekret,
          'sisa' =>$sisa,
          'no_surat' =>$no_surat,
          'keterangan' =>$keterangan,
      ]);

      Alert::success('Berhasil Di Tambahkan');

      return redirect()->route('admin.transaksi.index');
  }


  /**
   * Show the form for editing User.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Transaksi $transaksi)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $jenistransaksi = Jenistransaksi::all();
      $satuan = Satuan::all();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.transaksi.edit', compact('transaksi', 'pengguna', 'jenistransaksi', 'satuan'));
  }

  /**
   * Update User in storage.
   *
   * @param  \App\Http\Requests\UpdateUsersRequest  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $this->validate($request, [
          'nama_transaksi' => 'required',
          'id_satuan' => 'required',
          'harga_transaksi' => 'required',
          'id_jenis_transaksi' => 'required',
      ]);

      $transaksi = transaksi::find($request->id);
      $transaksi->nama_transaksi = $request->nama_transaksi;
      $transaksi->id_satuan = $request->id_satuan;
      $transaksi->harga_transaksi = $request->harga_transaksi;
      $transaksi->id_jenis_transaksi = $request->id_jenis_transaksi;
      $transaksi->save();

      toast('Ubah data berhasil','success');

      return redirect()->route('admin.transaksi.index');
  }

  public function show($id)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $transak = DB::table('tb_inventaris_transaksi')
              ->where('tb_inventaris_transaksi.id', $id)
              ->join('tb_inventaris_barang', 'tb_inventaris_barang.id', '=', 'tb_inventaris_transaksi.id_barang')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_transaksi.id_satuan')
              ->select('tb_inventaris_transaksi.*', 'tb_inventaris_barang.nama_barang', 'tb_inventaris_satuan.nama_satuan')
              ->get();
      
      // echo print_r($transaksi);
      //         die();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.transaksi.show', compact('transak', 'pengguna'));
  }

  /**
   * Remove User from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $data = transaksi::findOrFail($id);

      $data->delete();

      Alert::success('Berhasil', 'Di Hapus');

      return redirect()->route('admin.transaksi.index');
  }

  public function beritaacarapembelian(Request $request)
  {
      $tanggal = $request->tanggal_diterima;
      
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();
      $pembelian = DB::table('tb_inventaris_transaksi')
              ->where('tb_inventaris_transaksi.tanggal_diterima', $request->tanggal_diterima)
              ->where('tb_inventaris_transaksi.irban_pemb', '0')
              ->where('tb_inventaris_transaksi.irban_ek', '0')
              ->where('tb_inventaris_transaksi.irban_keu', '0')
              ->where('tb_inventaris_transaksi.irban_pem', '0')
              ->where('tb_inventaris_transaksi.sekret', '0')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_transaksi.id_satuan')
              ->join('tb_inventaris_barang', 'tb_inventaris_barang.id', '=', 'tb_inventaris_transaksi.id_barang')
              ->select('tb_inventaris_transaksi.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_barang.nama_barang')
              ->get();
      

      $pdf = PDF::loadView('admin.transaksi.beritaacarapembelian', compact(['tanggal', 'pengguna', 'pembelian']))->setPaper('folio', 'potrait');
      return $pdf->stream();
  }


  public function bulananprint(Request $request)
  {
      $bulan = $request->bulan;
      
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();
      $alattulis = DB::table('tb_inventaris_barang')
              ->where('id_jenis_barang', '5')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
              ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
              ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
              ->get();
      
      $alattulis1 = $alattulis;
      // echo print_r($alattulis1);
      $alattulisvalue=[];
      foreach ($alattulis1 as $key => $alattulis1) {
        $saldo_awal=0;
        $harga_satuan=0;
        $barang_masuk=0;
        $irban_pemb=0;
        $irban_ek=0;
        $irban_keu=0;
        $irban_pem=0;
        $sekret=0;
        $sisa=0;

        $data1 = DB::table('tb_inventaris_transaksi')
              ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
              ->where('id_barang', $alattulis1->id)
              ->oldest()
              ->first();
        
        $data2 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alattulis1->id)
        ->latest()
        ->first();

        $data3 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alattulis1->id)
        ->get();
        
        // echo print_r($data1);
        // die();
        if($data1!=null){
          $saldo_awal=$data1->saldo_awal;
        }

        if($data2!=null){
          $harga_satuan=$data2->harga_satuan;
        }

        if($data3!=null){
          foreach ($data3 as $key => $data3) {
            $barang_masuk+=$data3->barang_masuk;
            $irban_pemb+=$data3->irban_pemb;
            $irban_ek+=$data3->irban_ek;
            $irban_keu+=$data3->irban_keu;
            $irban_pem+=$data3->irban_pem;
            $sekret+=$data3->sekret;
            
          }
          $sisa=($saldo_awal+$barang_masuk)-($irban_pemb+$irban_ek+$irban_keu+$irban_pem+$sekret); 
        }
        $a =  array (
          'id_barang' => $alattulis1->id,
          'saldo_awal' => $saldo_awal,
          'harga_satuan' => $harga_satuan,
          'barang_masuk' => $barang_masuk,
          'irban_pemb' => $irban_pemb,
          'irban_ek' => $irban_ek,
          'irban_keu' => $irban_keu,
          'irban_pem' => $irban_pem,
          'sekret' => $sekret,
          'sisa' => $sisa,
        );
        array_push($alattulisvalue, $a);
      }

      // echo print_r($alattulisvalue);
      // die();

      $alatkebersihan = DB::table('tb_inventaris_barang')
              ->where('id_jenis_barang', '4')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
              ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
              ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
              ->get();

      $alatkebersihan1 = $alatkebersihan;
      $alatkebersihanvalue=[];
      foreach ($alatkebersihan1 as $key => $alatkebersihan1) {
        $saldo_awal=0;
        $harga_satuan=0;
        $barang_masuk=0;
        $irban_pemb=0;
        $irban_ek=0;
        $irban_keu=0;
        $irban_pem=0;
        $sekret=0;
        $sisa=0;

        $data1 = DB::table('tb_inventaris_transaksi')
              ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
              ->where('id_barang', $alatkebersihan1->id)
              ->oldest()
              ->first();
        
        $data2 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatkebersihan1->id)
        ->latest()
        ->first();

        $data3 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatkebersihan1->id)
        ->get();

        if($data1!=null){
          $saldo_awal=$data1->saldo_awal;
        }

        if($data2!=null){
          $harga_satuan=$data2->harga_satuan;
        }

        if($data3!=null){
          foreach ($data3 as $key => $data3) {
            $barang_masuk+=$data3->barang_masuk;
            $irban_pemb+=$data3->irban_pemb;
            $irban_ek+=$data3->irban_ek;
            $irban_keu+=$data3->irban_keu;
            $irban_pem+=$data3->irban_pem;
            $sekret+=$data3->sekret;
            
          }
          $sisa=($saldo_awal+$barang_masuk)-($irban_pemb+$irban_ek+$irban_keu+$irban_pem+$sekret); 
        }
        $a =  array (
          'id_barang' => $alatkebersihan1->id,
          'saldo_awal' => $saldo_awal,
          'harga_satuan' => $harga_satuan,
          'barang_masuk' => $barang_masuk,
          'irban_pemb' => $irban_pemb,
          'irban_ek' => $irban_ek,
          'irban_keu' => $irban_keu,
          'irban_pem' => $irban_pem,
          'sekret' => $sekret,
          'sisa' => $sisa,
        );
        array_push($alatkebersihanvalue, $a);
      }

      // echo print_r($alatkebersihanvalue);
      // die();

      $alatpos = DB::table('tb_inventaris_barang')
              ->where('id_jenis_barang', '3')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
              ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
              ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
              ->get();

      $alatpos1 = $alatpos;
      $alatposvalue=[];
      foreach ($alatpos1 as $key => $alatpos1) {
        $saldo_awal=0;
        $harga_satuan=0;
        $barang_masuk=0;
        $irban_pemb=0;
        $irban_ek=0;
        $irban_keu=0;
        $irban_pem=0;
        $sekret=0;
        $sisa=0;

        $data1 = DB::table('tb_inventaris_transaksi')
              ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
              ->where('id_barang', $alatpos1->id)
              ->oldest()
              ->first();
        
        $data2 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatpos1->id)
        ->latest()
        ->first();

        $data3 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatpos1->id)
        ->get();

        if($data1!=null){
          $saldo_awal=$data1->saldo_awal;
        }

        if($data2!=null){
          $harga_satuan=$data2->harga_satuan;
        }

        if($data3!=null){
          foreach ($data3 as $key => $data3) {
            $barang_masuk+=$data3->barang_masuk;
            $irban_pemb+=$data3->irban_pemb;
            $irban_ek+=$data3->irban_ek;
            $irban_keu+=$data3->irban_keu;
            $irban_pem+=$data3->irban_pem;
            $sekret+=$data3->sekret;
            
          }
          $sisa=($saldo_awal+$barang_masuk)-($irban_pemb+$irban_ek+$irban_keu+$irban_pem+$sekret); 
        }
        $a =  array (
          'id_barang' => $alatpos1->id,
          'saldo_awal' => $saldo_awal,
          'harga_satuan' => $harga_satuan,
          'barang_masuk' => $barang_masuk,
          'irban_pemb' => $irban_pemb,
          'irban_ek' => $irban_ek,
          'irban_keu' => $irban_keu,
          'irban_pem' => $irban_pem,
          'sekret' => $sekret,
          'sisa' => $sisa,
        );
        array_push($alatposvalue, $a);
      }

      $alatlistrik = DB::table('tb_inventaris_barang')
              ->where('id_jenis_barang', '2')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
              ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
              ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
              ->get();

      $alatlistrik1 = $alatlistrik;
      $alatlistrikvalue=[];
      foreach ($alatlistrik1 as $key => $alatlistrik1) {
        $saldo_awal=0;
        $harga_satuan=0;
        $barang_masuk=0;
        $irban_pemb=0;
        $irban_ek=0;
        $irban_keu=0;
        $irban_pem=0;
        $sekret=0;
        $sisa=0;

        $data1 = DB::table('tb_inventaris_transaksi')
              ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
              ->where('id_barang', $alatlistrik1->id)
              ->oldest()
              ->first();
        
        $data2 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatlistrik1->id)
        ->latest()
        ->first();

        $data3 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatlistrik1->id)
        ->get();

        if($data1!=null){
          $saldo_awal=$data1->saldo_awal;
        }

        if($data2!=null){
          $harga_satuan=$data2->harga_satuan;
        }

        if($data3!=null){
          foreach ($data3 as $key => $data3) {
            $barang_masuk+=$data3->barang_masuk;
            $irban_pemb+=$data3->irban_pemb;
            $irban_ek+=$data3->irban_ek;
            $irban_keu+=$data3->irban_keu;
            $irban_pem+=$data3->irban_pem;
            $sekret+=$data3->sekret;
            
          }
          $sisa=($saldo_awal+$barang_masuk)-($irban_pemb+$irban_ek+$irban_keu+$irban_pem+$sekret); 
        }
        $a =  array (
          'id_barang' => $alatlistrik1->id,
          'saldo_awal' => $saldo_awal,
          'harga_satuan' => $harga_satuan,
          'barang_masuk' => $barang_masuk,
          'irban_pemb' => $irban_pemb,
          'irban_ek' => $irban_ek,
          'irban_keu' => $irban_keu,
          'irban_pem' => $irban_pem,
          'sekret' => $sekret,
          'sisa' => $sisa,
        );
        array_push($alatlistrikvalue, $a);
      }

      $alatkomputer = DB::table('tb_inventaris_barang')
              ->where('id_jenis_barang', '1')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
              ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
              ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
              ->get();
      
      $alatkomputer1 = $alatkomputer;
      $alatkomputervalue=[];
      foreach ($alatkomputer1 as $key => $alatkomputer1) {
        $saldo_awal=0;
        $harga_satuan=0;
        $barang_masuk=0;
        $irban_pemb=0;
        $irban_ek=0;
        $irban_keu=0;
        $irban_pem=0;
        $sekret=0;
        $sisa=0;

        $data1 = DB::table('tb_inventaris_transaksi')
              ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
              ->where('id_barang', $alatkomputer1->id)
              ->oldest()
              ->first();
        
        $data2 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatkomputer1->id)
        ->latest()
        ->first();

        $data3 = DB::table('tb_inventaris_transaksi')
        ->whereMonth('tb_inventaris_transaksi.tanggal_diterima', '=', $request->bulan)
        ->where('id_barang', $alatkomputer1->id)
        ->get();

        if($data1!=null){
          $saldo_awal=$data1->saldo_awal;
        }

        if($data2!=null){
          $harga_satuan=$data2->harga_satuan;
        }

        if($data3!=null){
          foreach ($data3 as $key => $data3) {
            $barang_masuk+=$data3->barang_masuk;
            $irban_pemb+=$data3->irban_pemb;
            $irban_ek+=$data3->irban_ek;
            $irban_keu+=$data3->irban_keu;
            $irban_pem+=$data3->irban_pem;
            $sekret+=$data3->sekret;
            
          }
          $sisa=($saldo_awal+$barang_masuk)-($irban_pemb+$irban_ek+$irban_keu+$irban_pem+$sekret); 
        }
        $a =  array (
          'id_barang' => $alatkomputer1->id,
          'saldo_awal' => $saldo_awal,
          'harga_satuan' => $harga_satuan,
          'barang_masuk' => $barang_masuk,
          'irban_pemb' => $irban_pemb,
          'irban_ek' => $irban_ek,
          'irban_keu' => $irban_keu,
          'irban_pem' => $irban_pem,
          'sekret' => $sekret,
          'sisa' => $sisa,
        );
        array_push($alatkomputervalue, $a);
      }

      // die();
      //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
      //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
      $pdf = PDF::loadView('admin.transaksi.bulananprint', compact(['bulan', 'pengguna', 'alattulisvalue', 'alatkebersihanvalue', 'alatposvalue', 'alatlistrikvalue', 'alatkomputervalue', 'alattulis', 'alatkebersihan', 'alatpos', 'alatlistrik', 'alatkomputer']))->setPaper('folio', 'landscape');
      return $pdf->stream();
  }
  public function tahunanprint(Request $request)
  {
    $tahun = $request->tahun;
      
    $pengguna = Auth::getUser();
    $pengguna = pegawai::where('nip', $pengguna['name'])->first();
    $alattulis = DB::table('tb_inventaris_barang')
            ->where('id_jenis_barang', '5')
            ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
            ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
            ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
            ->get();
    
    $alattulis1 = $alattulis;
    // echo print_r($alattulis1);
    $alattulisvalue=[];
    foreach ($alattulis1 as $key => $alattulis1) {
      $saldo_awal=0;
      $harga_satuan=0;
      $barang_masuk=0;
      $barang_keluar=0;
      $sisa=0;

      $data1 = DB::table('tb_inventaris_transaksi')
            ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
            ->where('id_barang', $alattulis1->id)
            ->oldest()
            ->first();
      
      $data2 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alattulis1->id)
      ->latest()
      ->first();

      $data3 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alattulis1->id)
      ->get();
      
      // echo print_r($data1);
      // die();
      if($data1!=null){
        $saldo_awal=$data1->saldo_awal;
      }

      if($data2!=null){
        $harga_satuan=$data2->harga_satuan;
      }

      if($data3!=null){
        foreach ($data3 as $key => $data3) {
          $barang_masuk+=$data3->barang_masuk;
          $barang_keluar+=$data3->irban_pemb+$data3->irban_ek+$data3->irban_keu+$data3->irban_pem+$data3->sekret;
        }
        $sisa=($saldo_awal+$barang_masuk)-$barang_keluar; 
      }
      $a =  array (
        'id_barang' => $alattulis1->id,
        'saldo_awal' => $saldo_awal,
        'harga_satuan' => $harga_satuan,
        'barang_masuk' => $barang_masuk,
        'barang_keluar' => $barang_keluar,
        'sisa' => $sisa,
      );
      array_push($alattulisvalue, $a);
    }

    $alatkebersihan = DB::table('tb_inventaris_barang')
            ->where('id_jenis_barang', '4')
            ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
            ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
            ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
            ->get();
    
    $alatkebersihan1 = $alatkebersihan;
    // echo print_r($alatkebersihan1);
    $alatkebersihanvalue=[];
    foreach ($alatkebersihan1 as $key => $alatkebersihan1) {
      $saldo_awal=0;
      $harga_satuan=0;
      $barang_masuk=0;
      $barang_keluar=0;
      $sisa=0;

      $data1 = DB::table('tb_inventaris_transaksi')
            ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
            ->where('id_barang', $alatkebersihan1->id)
            ->oldest()
            ->first();
      
      $data2 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatkebersihan1->id)
      ->latest()
      ->first();

      $data3 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatkebersihan1->id)
      ->get();
      
      // echo print_r($data1);
      // die();
      if($data1!=null){
        $saldo_awal=$data1->saldo_awal;
      }

      if($data2!=null){
        $harga_satuan=$data2->harga_satuan;
      }

      if($data3!=null){
        foreach ($data3 as $key => $data3) {
          $barang_masuk+=$data3->barang_masuk;
          $barang_keluar+=$data3->irban_pemb+$data3->irban_ek+$data3->irban_keu+$data3->irban_pem+$data3->sekret;
        }
        $sisa=($saldo_awal+$barang_masuk)-$barang_keluar; 
      }
      $a =  array (
        'id_barang' => $alatkebersihan1->id,
        'saldo_awal' => $saldo_awal,
        'harga_satuan' => $harga_satuan,
        'barang_masuk' => $barang_masuk,
        'barang_keluar' => $barang_keluar,
        'sisa' => $sisa,
      );
      array_push($alatkebersihanvalue, $a);
    }

    $alatpos = DB::table('tb_inventaris_barang')
            ->where('id_jenis_barang', '3')
            ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
            ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
            ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
            ->get();
    
    $alatpos1 = $alatpos;
    // echo print_r($alatpos1);
    $alatposvalue=[];
    foreach ($alatpos1 as $key => $alatpos1) {
      $saldo_awal=0;
      $harga_satuan=0;
      $barang_masuk=0;
      $barang_keluar=0;
      $sisa=0;

      $data1 = DB::table('tb_inventaris_transaksi')
            ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
            ->where('id_barang', $alatpos1->id)
            ->oldest()
            ->first();
      
      $data2 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatpos1->id)
      ->latest()
      ->first();

      $data3 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatpos1->id)
      ->get();
      
      // echo print_r($data1);
      // die();
      if($data1!=null){
        $saldo_awal=$data1->saldo_awal;
      }

      if($data2!=null){
        $harga_satuan=$data2->harga_satuan;
      }

      if($data3!=null){
        foreach ($data3 as $key => $data3) {
          $barang_masuk+=$data3->barang_masuk;
          $barang_keluar+=$data3->irban_pemb+$data3->irban_ek+$data3->irban_keu+$data3->irban_pem+$data3->sekret;
        }
        $sisa=($saldo_awal+$barang_masuk)-$barang_keluar; 
      }
      $a =  array (
        'id_barang' => $alatpos1->id,
        'saldo_awal' => $saldo_awal,
        'harga_satuan' => $harga_satuan,
        'barang_masuk' => $barang_masuk,
        'barang_keluar' => $barang_keluar,
        'sisa' => $sisa,
      );
      array_push($alatposvalue, $a);
    }

    $alatlistrik = DB::table('tb_inventaris_barang')
            ->where('id_jenis_barang', '2')
            ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
            ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
            ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
            ->get();
    
    $alatlistrik1 = $alatlistrik;
    // echo print_r($alatlistrik1);
    $alatlistrikvalue=[];
    foreach ($alatlistrik1 as $key => $alatlistrik1) {
      $saldo_awal=0;
      $harga_satuan=0;
      $barang_masuk=0;
      $barang_keluar=0;
      $sisa=0;

      $data1 = DB::table('tb_inventaris_transaksi')
            ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
            ->where('id_barang', $alatlistrik1->id)
            ->oldest()
            ->first();
      
      $data2 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatlistrik1->id)
      ->latest()
      ->first();

      $data3 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatlistrik1->id)
      ->get();
      
      // echo print_r($data1);
      // die();
      if($data1!=null){
        $saldo_awal=$data1->saldo_awal;
      }

      if($data2!=null){
        $harga_satuan=$data2->harga_satuan;
      }

      if($data3!=null){
        foreach ($data3 as $key => $data3) {
          $barang_masuk+=$data3->barang_masuk;
          $barang_keluar+=$data3->irban_pemb+$data3->irban_ek+$data3->irban_keu+$data3->irban_pem+$data3->sekret;
        }
        $sisa=($saldo_awal+$barang_masuk)-$barang_keluar; 
      }
      $a =  array (
        'id_barang' => $alatlistrik1->id,
        'saldo_awal' => $saldo_awal,
        'harga_satuan' => $harga_satuan,
        'barang_masuk' => $barang_masuk,
        'barang_keluar' => $barang_keluar,
        'sisa' => $sisa,
      );
      array_push($alatlistrikvalue, $a);
    }

    $alatkomputer = DB::table('tb_inventaris_barang')
            ->where('id_jenis_barang', '1')
            ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
            ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
            ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
            ->get();
    
    $alatkomputer1 = $alatkomputer;
    // echo print_r($alatkomputer1);
    $alatkomputervalue=[];
    foreach ($alatkomputer1 as $key => $alatkomputer1) {
      $saldo_awal=0;
      $harga_satuan=0;
      $barang_masuk=0;
      $barang_keluar=0;
      $sisa=0;

      $data1 = DB::table('tb_inventaris_transaksi')
            ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
            ->where('id_barang', $alatkomputer1->id)
            ->oldest()
            ->first();
      
      $data2 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatkomputer1->id)
      ->latest()
      ->first();

      $data3 = DB::table('tb_inventaris_transaksi')
      ->whereYear('tb_inventaris_transaksi.tanggal_diterima', '=', $request->tahun)
      ->where('id_barang', $alatkomputer1->id)
      ->get();
      
      // echo print_r($data1);
      // die();
      if($data1!=null){
        $saldo_awal=$data1->saldo_awal;
      }

      if($data2!=null){
        $harga_satuan=$data2->harga_satuan;
      }

      if($data3!=null){
        foreach ($data3 as $key => $data3) {
          $barang_masuk+=$data3->barang_masuk;
          $barang_keluar+=$data3->irban_pemb+$data3->irban_ek+$data3->irban_keu+$data3->irban_pem+$data3->sekret;
        }
        $sisa=($saldo_awal+$barang_masuk)-$barang_keluar; 
      }
      $a =  array (
        'id_barang' => $alatkomputer1->id,
        'saldo_awal' => $saldo_awal,
        'harga_satuan' => $harga_satuan,
        'barang_masuk' => $barang_masuk,
        'barang_keluar' => $barang_keluar,
        'sisa' => $sisa,
      );
      array_push($alatkomputervalue, $a);
    }

    // die();
    //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    $pdf = PDF::loadView('admin.transaksi.tahunanprint', compact(['tahun', 'pengguna', 'alattulisvalue', 'alatkebersihanvalue', 'alatposvalue', 'alatlistrikvalue', 'alatkomputervalue', 'alattulis', 'alatkebersihan', 'alatpos', 'alatlistrik', 'alatkomputer']))->setPaper('folio', 'landscape');
    return $pdf->stream();
  }
}
