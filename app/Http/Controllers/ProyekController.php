<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ProyekController extends Controller
{
    public function index(){
        $proyek = DB::table('proyek')->get();
        return view('proyek.index', compact('proyek'));
    }

    public function create(){
        return view('proyek.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_proyek' => 'required|unique:proyek|max:255',
            'deskripsi_proyek' => 'required',
            'karyawan_manager_id' => 'required'
        ]);

        $query = DB::table('proyek')->insert([
            "nama_proyek" => $request["nama_proyek"],
            "deskripsi_proyek" => $request["deskripsi_proyek"],
            "karyawan_manager_id" => $request["karyawan_manager_id"]
            ]
        );
        return redirect('/proyek')->with('success','Data berhasil disimpan!');
    }

    public function show($proyek_id){
        $proyek = DB::table('proyek')->where('id', $proyek_id)->first();
        return view('proyek.show', compact('proyek'));
    }

    public function edit($proyek_id){
        $proyek = DB::table('proyek')->where('id', $proyek_id)->first();
        return view('proyek.edit', compact('proyek'));
    }

    public function update($proyek_id, Request $request){
        $request->validate([
            'nama_proyek' => 'required|unique:proyek|max:255',
            'deskripsi_proyek' => 'required',
            'karyawan_manager_id' => 'required'
        ]);
        
        $query = DB::table('proyek')
                    ->where('id', $proyek_id)
                    ->update([
                        'nama_proyek'=> $request['nama_proyek'],
                        'deskripsi_proyek'=> $request['deskripsi_proyek'],
                        'karyawan_manager_id'=> $request['karyawan_manager_id']
            ]);
        return redirect('/proyek')->with('success','Berhasil update proyek!');
    }

    public function destroy($proyek_id){
        $proyek = DB::table('proyek')->where('id', $proyek_id)->delete();
        return redirect('/proyek')->with('success','Berhasil hapus pertanyaan!');
    }
}
