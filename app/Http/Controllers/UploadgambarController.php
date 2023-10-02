<?php

namespace App\Http\Controllers;

use Faker\Core\Barcode;
use App\Models\Uploadgambar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataGambar = Uploadgambar::latest()->get();
        return view('Uploadgambar.Data-gambar', compact('dataGambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('Uploadgambar.Create-gambar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

            $dtUpload = new Uploadgambar;
            $dtUpload->nama = $request->nama;
            $dtUpload->gambar = $namaFile;

            $nm->move(public_path().'/img', $namaFile);
            $dtUpload->save();

            return redirect('Data-gambar');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
