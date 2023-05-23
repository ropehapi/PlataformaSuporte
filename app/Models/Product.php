<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'customer_id',
        'status'
    ];
}
