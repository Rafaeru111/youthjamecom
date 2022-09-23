<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    //setting up foreign Key
    public function cat()
    {
                                        //Foreign Key    Primary Key
        return $this->belongsTo(Category::class, 'cat_id', 'id'); 
    }
 
}
