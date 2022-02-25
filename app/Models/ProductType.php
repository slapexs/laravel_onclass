<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_types';
    protected $primatyKey = 'id';
    protected $filable = 'name';
    public function products()
    {

        return $this->hasMany('App\Models\Product');
    }
}
