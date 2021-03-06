<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
