<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPeralatanController extends Controller
{
    public function data()
    {
        $peralatan = DB::table('peralatan')->get();

        // return $peralatan;
        return view('peralatan.data', ['peralatan' => $peralatan]);
        // return view('peralatan.data');
    }

    public function add()
    {
        return view ('peralatan.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'jenis'=> 'required',
            'Merk'=> 'required',
        ]);

        DB::table('peralatan')->insert([
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'seri' => $request->seri,
        ]);
        return redirect('peralatan')->with('status', 'Peralatan berhasil ditambah!');
    }

    public function edit($id)
    {
        $tool = DB::table('peralatan')->where('id', $id)->first();
        // dd($tool);
        return view('peralatan/edit', compact('tool'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'jenis'=> 'required',
            'Merk'=> 'required',
        ]);
        
        DB::table('peralatan')->where('id', $id)
            ->update([
                'jenis' => $request->jenis,
                'merk' => $request->merk,
                'seri' => $request->seri,
            ]);
            return redirect('peralatan')->with('status', 'Peralatan berhasil diubah!');
    }

    public function delete($id)
    {
        DB::table('peralatan')->where('id', $id)->delete();
        return redirect('peralatan')->with('status', 'Peralatan berhasil dihapus!');
    }
}
