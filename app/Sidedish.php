<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidedish extends Model
{
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipe_sidedish');
    }
}
