<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Seri;
use App\Models\Jenis;
use App\Models\peralatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPeralatanController extends Controller
{
    public function data()
    {
        $peralatan = peralatan::with('jenis', 'merk', 'seri')->get();
        // dd($peralatan);
        // return $peralatan;
        return view('peralatan.data', [
            'peralatan' => $peralatan
        ]);
        // return view('peralatan.data');
    }

    public function add()
    {
        return view('peralatan.add');
    }

    public function addProcess(Request $request)
    {
        // dd($request);
        $request->validate([
            'jenis' => 'required',
            'merk' => 'required',
            'seri' => 'required'
        ]);

        try {
            $jenis = Jenis::create([
                'jenis' => $request->jenis,
            ]);
            $merk = Merk::create([
                'merk' => $request->merk,
            ]);
            $seri = Seri::create([
                'seri' => $request->seri,
            ]);
            peralatan::create([
                'jenis_id' => $jenis->id,
                'merk_id' => $merk->id,
                'seri_id' => $seri->id,
            ]);
            return redirect('peralatan')->with('status', 'Peralatan berhasil ditambah!');
        } catch (e) {
            echo 'Gagal Simpan Data';
        }

        // peralatan::create([
        //     'jenis' => $request->jenis,
        //     'merk' => $request->merk,
        //     'seri' => $request->seri,
        // ]);
        // return redirect('peralatan')->with('status', 'Peralatan berhasil ditambah!');
    }

    public function edit($id)
    {
        $jenis = Jenis::where('id', $id)->first();
        $merk = Merk::where('id', $id)->first();
        $seri = Seri::where('id', $id)->first();
        $peralatan = peralatan::where('id', $id)->first();
        // dd($tool);
        return view('peralatan/edit', [
            'tool' => $peralatan,
            'jenis' => $jenis,
            'merk' => $merk,
            'seri' => $seri,
        ]);
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required',
            'merk' => 'required',
            'seri' => 'required'
        ]);

        Jenis::where('id', $id)
            ->update([
                'jenis' => $request->jenis,
            ]);
        Merk::where('id', $id)
            ->update([
                'merk' => $request->merk,
            ]);
        seri::where('id', $id)
            ->update([
                'seri' => $request->seri,
            ]);
        return redirect('peralatan')->with('status', 'Peralatan berhasil diubah!');
    }

    public function destroy($id)
    {
        peralatan::destroy($id);
        // return redirect('/');
        // $tool = peralatan::where('id', $id)->delete();
        return redirect('peralatan')->with('status', 'Peralatan berhasil dihapus!');
    }
}
