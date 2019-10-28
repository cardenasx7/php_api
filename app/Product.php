<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'stock'];
}

