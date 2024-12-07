<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar en masa
    protected $fillable = ['name', 'price', 'description', 'stock', 'status'];
}
