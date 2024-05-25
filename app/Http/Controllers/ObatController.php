<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obats = Obat::with('suplier')
            ->when($request->input('name'), function ($query, $name) {
                return $query->whereHas('suplier', function ($query) use ($name) {
                    $query->where('name', 'like', '%' . $name . '%');
                });
            })->paginate(10);

        return view('pages.obat.index', compact('obats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supliers = Suplier::all();
        return view('pages.obat.create', compact('supliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'suplier_id' => 'required',
        ]);

        $data = $request->all();

        Obat::create($data);

        return redirect()->route('obat.index')->with('message', 'Berhasil tambah data obat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $supliers = Suplier::when('');
        $obat = Obat::findOrFail($id);
        return view('pages.obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'suplier_id' => 'required',
        ]);

        $data = $request->all();

        $obat = Obat::findOrFail($id);

        $obat->update($data);

        return redirect()->route('obat.index')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return redirect()->route('obat.index');
    }
}
