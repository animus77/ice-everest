<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'date', 'day', 'amount', 'price', 'paid_amount', 'debt_amount', 'product',
        'order', 'trip', 'notes'
    ];
    
    public function user()
    {
        return $this->belongsTo(user::class); 
    }

    public function setDayAttribute($value)
    {
        $date = date_create($value);
        $print = date_format($date, "j");

        $this->attributes['day'] = strval($print);
    }

    public function setTripAttribute($value)
    {
        $product = $this->product;
        
        if ($product == "hielo") {
            $this->attributes['trip'] = 0;
        }else{
            $this->attributes['trip'] = $value;
        }
    }

    public function getBalanceAttribute()
    {
        //I´m not really sure about this code, but it works
        $paid = $this->where('user_id', $this->user_id)->where('product', 'pago')->sum('paid_amount');
        $debt = $this->where('user_id', $this->user_id)->sum('debt_amount');

        return $debt- $paid;
    }
}
