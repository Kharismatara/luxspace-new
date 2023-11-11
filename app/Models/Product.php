<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','price', 'description','slug'
    ];    

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
    
 
}