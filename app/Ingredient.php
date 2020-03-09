<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function pantries()
    {
        return $this->belongsToMany(Pantry::class, 'ingredient_pantry');
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'ingredient_recipe');
    }

    
}
