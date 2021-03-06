<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'diet_recipe');
    }
}
