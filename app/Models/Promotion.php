<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'url', 'description', 'purchase_price', 'sale_price', 'point_price'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
