<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Http\Requests\PromotionsRequest;

class PromotionController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:promotions')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('promotion.index', [
            'promotions' => Promotion::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromotionsRequest $request)
    {
        Promotion::create([
            'name' => $request->name,
            'url' => $request->url,
            'description' => $request->description,
            'available' => 1,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'point_price' => $request->point_price,
        ]);

        return back()->with('info', 'Registro guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromotionsRequest $request, Promotion $promotion)
    {
        $promotion->update([
            'name' => $request->name,
            'url' => $request->url,
            'description' => $request->description,
            'available' => $request->available,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'point_price' => $request->point_price,
        ]);

        return back()->with('info', 'Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();

        return back()->with('info', 'Promocion eliminada');
    }
}
