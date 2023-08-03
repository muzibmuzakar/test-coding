<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::get();

        return view('transaksi.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coa = Coa::get();

        return view('transaksi.create')->with(['coa' => $coa]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'coa_id' => 'required',
            'desc' => 'required',
            'credit' => 'max:255',
            'debit' => 'max:255',
        ]);

        Transaksi::create($data);

        return redirect()->route('transaksi.index');
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
        $data = Transaksi::where('id', $id)->first();
        $coa = Coa::get();

        return view('transaksi.edit')->with([
            'data' => $data,
            'coa' => $coa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'coa_id' => 'required',
            'desc' => 'required',
            'credit' => 'max:255',
            'debit' => 'max:255',
        ]);

        Transaksi::where('id', $id)->update($data);

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transaksi::where('id', $id)->delete();

        return redirect()->back();
    }
}
