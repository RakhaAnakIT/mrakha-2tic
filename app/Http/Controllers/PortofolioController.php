<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataPortofolio'] = Portofolio::all();
        return view('admin.portofolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data['tentang_saya'] = $request->tentang_saya;
        $data['data_pribadi'] = $request->data_pribadi;
        $data['pengalaman_kerja'] = $request->pengalaman_kerja;
        $data['keahlian'] = $request->keahlian;
        $data['pendidikan'] = $request->pendidikan;

        Portofolio::create($data);

        return redirect()->route('portofolio.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataPortofolio'] = Portofolio::findOrFail($id);
        return view('admin.portofolio.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portofolio_id = $id;
        $portofolio = Portofolio::findOrFail($portofolio_id);

        $portofolio->tentang_saya = $request->tentang_saya;
        $portofolio->data_pribadi = $request->data_pribadi;
        $portofolio->pengalaman_kerja = $request->pengalaman_kerja;
        $portofolio->keahlian = $request->keahlian;
        $portofolio->pendidikan = $request->pendidikan;

        $portofolio->save();
        return redirect()->route('portofolio.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $portofolio->delete();
        return redirect()->route('portofolio.index')->with('success', 'Data berhasil dihapus');
    }
}
