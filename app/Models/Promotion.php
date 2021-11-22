<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    // use SoftDeletes;
    //cuando usamos este trait, seguimos usando el metodo de siempre para borrar
    // la diferencia es que este generara un registro en la columna de deleted_at 
    // tener en cuenta que al generar la migracion deberiamos incluir esa columna 
    use HasFactory;

    protected $fillable = [
        'name', 'url', 'description', 'available','purchase_price', 'sale_price', 'point_price'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
