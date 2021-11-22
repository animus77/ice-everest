<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Equipment;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users');
    }
    public function edit(User $user)
    {
        $products = Product::all();
        $equipments = Equipment::all();
        $roles = Role::all()->except(1);

        return view('client.edit', compact(
            'user', 'products', 'equipments', 'roles'
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

        if ($user->id == 1) {
            $user->roles()->sync(1);
        } else {
            $user->roles()->sync($request->get('roles'));
        }
        
        $user->products()->sync($request->get('products'));
        $user->equipments()->sync($request->get('equipments'));

        return back()->with('info', 'Actualizado con exito');
    }
}
