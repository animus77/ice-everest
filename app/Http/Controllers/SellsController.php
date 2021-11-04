<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sell;
use App\Models\User;
use App\Http\Requests\SellsRequest;

class SellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date = $request->date;

        $sells = Sell::with('user')->where('date', $date)->orderBy('trip', 'asc')
            ->orderBy('created_at', 'asc')->get();
        $group = $sells->groupBy('trip')->count();

        $day_payments = $sells->where('product', 'pago');
        $total_payment = $day_payments->sum('paid_amount');

        $pieces_trip = [];
        $paid_trip = [];

        for ($i=0; $i <=$group ; $i++) { 
            $trips = $sells->where('trip', $i)->sum('amount');
            array_push($pieces_trip, $trips);

            $payments = $sells->where('trip', $i)->sum('paid_amount');
            array_push($paid_trip, $payments);
        }

        $ice_payment = array_shift($paid_trip);
        $ice_pieces = array_shift($pieces_trip);

        $water_payment = array_sum($paid_trip);
        $water_pieces = array_sum($pieces_trip);

        return view('sells.index', compact(
            'sells', 'group', 'ice_payment', 'ice_pieces', 'water_payment', 'water_pieces',
            'day_payments', 'total_payment', 'pieces_trip', 'paid_trip'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('sells.create', compact(
            'users'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellsRequest $request)
    {
        Sell::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'day' => $request->date,
            'amount' => $request->amount,
            'price' => $request->price,
            'paid_amount' => $request->paid_amount,
            'debt_amount' => $request->debt_amount,
            'product' => $request->product,
            'order' => $request->order,
            'trip' => $request->trip,
            'notes' => $request->notes
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
        $sells = sell::whereMonth('date', $id)->orderBy('user_id', 'asc')->get();
        $users = $sells->groupBy('user_id')->count('user_id');
        $user = User::all();

        $avg_consumptions = [];
        $quantities = [];
        $people = [];

        for ($i = 1; $i <= $users; $i++) { 
            $avg = $sells->where('user_id', $i)->avg('amount');
            array_push($avg_consumptions, $avg);

            $quantity = $sells->where('user_id', $i)->sum('amount');
            array_push($quantities, $quantity);

            $person = $user->where('id', $i)->sum('id');
            array_push($people, $person);
        }

        array_multisort($avg_consumptions, $people);

        return view('sells.show', compact(
            'sells', 'avg_consumptions', 'quantities', 'people'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell)
    {
        $users = User::all();
        return view('sells.edit', compact('sell','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SellsRequest $request, sell $sell)
    {
        $sell->update([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'day' => $request->date,
            'amount' => $request->amount,
            'price' => $request->price,
            'paid_amount' => $request->paid_amount,
            'debt_amount' => $request->debt_amount,
            'product' => $request->product,
            'order' => $request->order,
            'trip' => $request->trip,
            'notes' => $request->notes
        ]);

        return back()->with('info', 'Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        $sell->delete();
        return back()->with('info', 'Registro eliminado');
    }
}
