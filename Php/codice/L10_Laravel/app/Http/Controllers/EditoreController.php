<?php

namespace App\Http\Controllers;

use App\Models\Editore;
use Illuminate\Http\Request;

class EditoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editori = Editore::all();
        $titolo = "Editori";

        return view('editori', ['editori'=>$editori, 'titolo' => $titolo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Editore $editore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editore $editore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editore $editore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editore $editore)
    {
        //
    }
}
