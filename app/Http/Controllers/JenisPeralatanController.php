<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPeralatanController extends Controller
{
    public function show()
    {
        $peralatan = Peralatan::get();

        return view('peralatan.data', ['peralatan' => $peralatan]);
    }

    public function showAddForm()
    {
        return view('peralatan.add');
    }

    public function submitAddForm(Request $request)
    {
        $request->validate([
            'jenis' => ['required'],
            'merk' => ['required']
        ]);

        Peralatan::create([
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'seri' => $request->seri
        ]);
        return redirect('peralatan')->with('status', 'Peralatan berhasil ditambah!');
    }

    public function showEditForm($id)
    {
        $peralatan = Peralatan::where('id', $id)->first();

        return view('peralatan.edit', ['peralatan' => $peralatan, 'id' => $id]);
    }

    public function submitEditForm(Request $request)
    {
        $request->validate([
            'jenis' => ['required'],
            'merk' => ['required']
        ]);

        Peralatan::where('id', $request->id)->update([
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'seri' => $request->seri
        ]);
        return redirect('peralatan')->with('status', 'Peralatan berhasil diubah!');
    }

    public function destroy($id)
    {
        Peralatan::where('id', $id)->delete();
        return redirect('peralatan')->with('status', 'Peralatan berhasil dihapus!');
    }
}
