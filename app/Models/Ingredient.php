<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    // Add the fillable fields
    protected $fillable = ['name', 'url'];

    // Added 'many to many' report with the 'products' table
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withTimestamps();
    }
}
