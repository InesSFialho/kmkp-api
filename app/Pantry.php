<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pantry extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'pantry_user');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_pantry');
    }
}
