<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Seri;
use App\Models\Jenis;
use App\Models\peralatan;
use Illuminate\Http\Request;
use App\Models\DaftarPeralatan;

class DaftarPeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatan = DaftarPeralatan::with(['jenis', 'merk', 'seri'])->get();
        // dd($peralatan);
        return view('home', [
            'peralatan' => $peralatan
        ]);
    }

    public function createView()
    {
        $jenis = Jenis::get();
        $merk = Merk::get();
        $seri = Seri::get();
        return view('add-peralatan', [
            'jenis' => $jenis,
            'merk' => $merk,
            'seri' => $seri,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        $request->validate([
            'jenis' => 'required',
            'merk' => 'required',
            'seri' => 'required',
            'kode_barang' => 'required',
            'tahun_pengadaan' => 'required',
            'divisi' => 'required',
            'info' => 'required',
        ]);

        try {
            DaftarPeralatan::create([
                'jenis_id' => $request->jenis,
                'merk_id' => $request->merk,
                'seri_id' => $request->seri,
                'kode_barang' => $request->kode_barang,
                'tahun_pengadaan' => $request->tahun_pengadaan,
                'divisi' => $request->divisi,
                'info' => $request->info,
            ]);
            return redirect('/')->with('status', 'Peralatan berhasil ditambah!');
        } catch (e) {
            echo 'Gagal Simpan Data';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editView($id)
    {
        $jenis = Jenis::get();
        $merk = Merk::get();
        $seri = Seri::get();
        $daftarperalatan = DaftarPeralatan::where('id', $id)->first();
        // dd($daftarperalatan->seri_id);
        return view('edit-peralatan', [
            'daftarperalatan' => $daftarperalatan,
            'jenis' => $jenis,
            'merk' => $merk,
            'seri' => $seri,
        ]);
    }
    public function edit(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required',
            'merk' => 'required',
            'seri' => 'required',
            'kode_barang' => 'required',
            'tahun_pengadaan' => 'required',
            'divisi' => 'required',
            'info' => 'required',
        ]);

        try {
            DaftarPeralatan::where('id', $id)->update([
                'jenis_id' => $request->jenis,
                'merk_id' => $request->merk,
                'seri_id' => $request->seri,
                'kode_barang' => $request->kode_barang,
                'tahun_pengadaan' => $request->tahun_pengadaan,
                'divisi' => $request->divisi,
                'info' => $request->info,
            ]);
            return redirect('/')->with('status', 'Peralatan berhasil ditambah!');
        } catch (e) {
            echo 'Gagal Simpan Data';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarPeralatan::destroy($id);
        return redirect('/')->with('status', 'Peralatan berhasil dihapus!');
    }
}
