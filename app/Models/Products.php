<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $table = 'product';
    protected $fillable = [
        'cat_id',
        'name',
        'psdec',
        'pdesc',
        'original_price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'status',
        'trend',
        'mett',
        'metd',
        
    ];
}
