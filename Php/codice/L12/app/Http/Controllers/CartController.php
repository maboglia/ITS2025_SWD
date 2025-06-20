<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function remove(Request $request)
    {
        return 'Non funziona un cavolo qui dentro!!!';
    }

    public function add(Request $request) {
        
        //verifico la presenza del carrello in sessione
        //se non c'è lo creo e lo aggiungo
        if (!session()->has('cart')){
            session()->put('cart', Cart::create([ 'totale' => 0 ] ));
        }

        //salvo il carrello nella variabile $carrello
        $carrello = session()->get('cart') ;

        //ricevo l'input utente
        $product_id = $request->input('product_id');
        
        //trovo il prodotto che l'utente vuole inserire
        $prodotto = Product::findOrFail($product_id);

        //var_dump($prodotto);die();

        //aggiungi il prodotto al carrello
        $carrello->addArticolo($prodotto);

        //salvo in sessione il nuovo carrello modificato
        session()->put('cart', $carrello);

        return redirect()->route('products.index');


    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carrello = session()->get('cart') ;
        $articoli = $carrello->getArticoli();
        $totale = $carrello->totale;

        return view('carrello', compact('articoli', 'totale'));
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
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
