<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataBarang;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarang = dataBarang::all();
        return view ('databarang.index')->with('databarang', $dataBarang);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('databarang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $requestData = $request->all();
        $fileName = $request->file('gambar_barang')->getClientOriginalName();
        $path = $request->file('gambar_barang')->storeAs('images', $fileName, 'public');
        $requestData['gambar_barang'] = '/storage/'.$path;
        dataBarang::create($requestData);
        return redirect('data_barang')->with('flash_message', 'data berhasil ditambahkan');
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
