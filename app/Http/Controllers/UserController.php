<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Equipment;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $products = Product::all();
        $equipments = Equipment::all();

        return view('client.edit', compact(
            'user', 'products', 'equipments'
        ));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'ref' => 'required',
            'address' => 'required',
        ]);
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'ref' => $request->ref,
            'address' => $request->address,
            'url_document' => $request->url
        ]);
        $user->products()->sync($request->get('products'));
        $user->equipments()->sync($request->get('equipments'));

        return back()->with('info', 'Actualizado con exito');
    }
}
