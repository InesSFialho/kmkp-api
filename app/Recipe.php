<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function diets()
    {
        return $this->belongsToMany(Diet::class, 'diet_recipe');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_recipe');
    }

    public function sidedishes()
    {
        return $this->belongsToMany(Sidedish::class, 'recipe_sidedish');
    }

    public function directions()
    {
        return $this->hasMany(Direction::class);
    }
}
