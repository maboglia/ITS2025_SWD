<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editori = Publisher::all();
        $titolo = "My publishers";

        return view('editori', ['editori'=>$editori, 'titolo' => $titolo]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titolo = "Add new publisher";

        return view("editore_form", ["titolo"=>$titolo]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublisherRequest $request)
    {
        
        var_dump($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        $titolo = 'Scheda del publisher: ' . $publisher->nome;
        
        return view('publisher', ['publisher'=>$publisher,'titolo'=>$titolo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        //
    }
}
