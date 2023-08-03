<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coa;
use Illuminate\Http\Request;

class CoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Coa::get();

        return view('coa.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::get();
        return view('coa.create')->with(['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'category_id' => 'required',
        ]);

        Coa::create($data);

        return redirect()->route('coa.index');
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
        $data = Coa::where('id', $id)->first();
        $category = Category::get();

        return view('coa.edit')->with([
            'data' => $data,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'category_id' => 'required',
        ]);

        Coa::where('id', $id)->update($data);

        return redirect()->route('coa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Coa::where('id', $id)->delete();

        return redirect()->back();
    }
}
