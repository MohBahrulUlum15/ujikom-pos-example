<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $supliers = DB::table('supliers')->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })->paginate(10);

        return view('pages.suplier.index', compact('supliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required|numeric',
        ]);

        $data = $request->all();

        Suplier::create($data);

        return redirect()->route('suplier.index')->with('message', 'Berhasil tambah data suplier');
    }


    /**
     * Display the specified resource.
     */
    public function show(Suplier $suplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('pages.suplier.edit', compact('suplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required|numeric',
        ]);

        $data = $request->all();
        $suplier = Suplier::findOrFail($id);

        $suplier->update($data);

        return redirect()->route('suplier.index')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $suplier = Suplier::findOrFail($id);
        $suplier->delete();
        return redirect()->route('suplier.index');
    }
}
