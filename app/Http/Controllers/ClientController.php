<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sell;
use App\Models\User;
use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users')->only(['edit']);
        $this->middleware('permission:users')->only(['update']);
        $this->middleware('permission:purchase')->only(['purchase']);
        $this->middleware('permission:profile')->only(['profile']);
    }

    public function promotion()
    {
        return view('frontend.promotions', [
            'promotions' => Promotion::where('available', 1)->get()
        ]);
    }
    
    public function edit(User $user)
    {
        $promotions = Promotion::where('available', 1)->get();

        return view('client.promotion', compact(
            'user', 'promotions'
        ));
    }

    public function update(Request $request, User $user )
    {
        $user->promotions()->syncWithoutDetaching($request->get('promotions'));
        
        return back()->with('info', 'Promocion guardada');
    }

    public function purchase(User $user)
    {
        $usuario = Auth::id();
        $client = User::find($user->id);
        $purchases = Sell::where('user_id', $user->id)->orderBy('date', 'asc')->get();

        $payment = $purchases->where('product', 'pago')->sum('paid_amount');
        $debt = $purchases->sum('debt_amount');
        $balance = $debt - $payment;

        if ($usuario == $user->id || $usuario == 1) {
            return view('client.purchase', compact(
                'client', 'purchases', 'usuario', 'balance'
            ));
        } else {
            return back();
        }
    }

    public function profile(User $user)
    {
        $usuario = Auth::id();
        $client = User::find($user->id);
        $promotions = Promotion::where('available', 1)->get();

        $client_promo = $client->promotions;
        $client_product = $client->products;
        $client_equipment = $client->equipments;

        $amount_ice = $client->sells->where('product', 'hielo')->sum('amount');
        $amount_water = $client->sells->where('product', 'agua')->sum('amount');
        $payment = $client->sells->where('product', 'pago')->sum('paid_amount');

        $debt = $client->sells->sum('debt_amount');

        $price_water = $client->sells->where('product', 'agua')->avg('price');
        $price_ice = $client->sells->where('product', 'hielo')->avg('price');
        $points_promo = $client_promo->sum('point_price');

        switch ($price_water) {
            case 10:
                $water_point = $amount_water*.6;
                break;
            case 11:
                $water_point = $amount_water*.7;
                break;
            case 12:
                $water_point = $amount_water*.8;
                break;
            case 13:
                $water_point = $amount_water*.9;
                break;
            case 15:
                $water_point = $amount_water;
                break;
            default:
                $water_point = 0;
                break;
        }

        switch ($price_ice) {
            case 11:
                $ice_point = $amount_ice*.2;
                break;
            case 12:
                $ice_point = $amount_ice*.3;
                break;
            case 13:
                $ice_point = $amount_ice*.4;
                break;
            case 14:
                $ice_point = $amount_ice*.5;
                break;
            case 15:
                $ice_point = $amount_ice*.6;
                break;
            default:
                $ice_point = 0;
                break;
        }

        $purchase_point = round($water_point + $ice_point);
        $balance = $debt - $payment;
        $points = $purchase_point - $points_promo;

        if ($usuario == $user->id || $usuario == 1) {
            return view('client.profile', compact(
                'client', 'client_promo', 'client_product', 'client_equipment', 'balance',
                'price_water', 'price_ice', 'points', 'promotions'
            ));
        } else {
            return back();

        }
    }
}
