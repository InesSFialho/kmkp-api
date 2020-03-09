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

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'recipe_meals');
    }

    public function sidedishes()
    {
        return $this->belongsToMany(Meal::class, 'recipe_meals')->wherePivot('sidedish', 1);
    }

    public function maindishes()
    {
        return $this->belongsToMany(Meal::class, 'recipe_meals')->wherePivot('sidedish', 0);
    }

    public function directions()
    {
        return $this->hasMany(Direction::class);
    }


}
