<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sell;
use App\Models\User;

class ClientController extends Controller
{
    public function purchase(User $user)
    {
        $client = User::find($user->id);
        $purchases = Sell::where('user_id', $user->id)->orderBy('date', 'asc')->get();

        return view('client.purchase', compact(
            'client', 'purchases'
        ));
    }

    public function profile(User $user)
    {
        $client = User::find($user->id);

        $client_promo = $client->promotions;
        $client_product = $client->products;
        $client_equipment = $client->equipments;

        $amount_ice = $client->sells->where('product', 'hielo')->sum('amount');
        $amount_water = $client->sells->where('product', 'agua')->sum('amount');
        $payment = $client->sells->where('product', 'pago')->sum('amount');
        $debt = $client->sells->sum('debt_amount');

        $price_water = $client->sells->where('product', 'agua')->avg('price');
        $price_ice = $client->sells->where('product', 'hielo')->avg('price');
        $points_promo = $client_promo->sum('point_price');

        switch ($price_water) {
            case 10:
                $water_point = $amount_water*.7;
                break;
            case 11:
                $water_point = $amount_water*.8;
                break;
            case 12:
                $water_point = $amount_water*.9;
                break;
            case 13:
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

        return view('client.profile', compact(
            'client_promo', 'client_product', 'client_equipment', 'payment',
            'debt', 'price_water', 'price_ice', 'points_promo', 'purchase_point'
        ));
    }
}
