<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Program;
use App\pegawai;
use File;
use PDF;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramController extends Controller
{
    public function tambah($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        } 
        $sakip = $id;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.program.create', compact(['sakip', 'pengguna']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'id_sakip' => 'required',
            'program' => 'required',
            'anggaran' => 'required',
            'urutan_per_tahun' => 'required',
            'created_by' => 'required',
        ]);
        
        Program::create([
            'id_sakip' => $request->id_sakip,
            'program' => $request->program,
            'anggaran' => $request->anggaran,
            'urutan_per_tahun' => $request->urutan_per_tahun,
            'created_by' => $request->created_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->program);

        return redirect()->route('admin.perjanjian.list', $request->id_sakip);
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($program)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $program = Program::where('id',$program)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.program.edit', compact('program', 'pengguna'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'id_sakip' => 'required',
            'program' => 'required',
            'anggaran' => 'required',
            'urutan_per_tahun' => 'required',
            'created_by' => 'required',
        ]);  
        
        $id= $request->id_sakip;

        $program = Program::find($request->id);
        $program->program = $request->program;
        $program->anggaran = $request->anggaran;
        $program->urutan_per_tahun = $request->urutan_per_tahun;
        $program->created_by = $request->created_by;
        $program->id_sakip = $request->id_sakip;
        $program->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.perjanjian.list', $id);
    }

    public function show($program)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $program = Program::where('id',$program)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.program.show', compact('program', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        $program = Program::where('id',$id)->first();

        $data = Program::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.perjanjian.list', $program->id_sakip);
    }
}
