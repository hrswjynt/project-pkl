<?php

namespace App\Http\Controllers;

use App\Models\peralatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPeralatanController extends Controller
{
    public function data()
    {
        $peralatan = peralatan::get();

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
        dd($request);
        $request->validate([
            'jenis'=> 'required',
            'merk'=> 'required',
            'seri'=> 'required'
        ]);

        try{
            peralatan::create([
                'jenis' => $request->jenis,
                'merk' => $request->merk,
                'seri' => $request->seri,
            ]);
            return redirect('peralatan')->with('status', 'Peralatan berhasil ditambah!');
        }catch(e){echo'Gagal Simpan Data';}

        // peralatan::create([
        //     'jenis' => $request->jenis,
        //     'merk' => $request->merk,
        //     'seri' => $request->seri,
        // ]);
        // return redirect('peralatan')->with('status', 'Peralatan berhasil ditambah!');
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
