<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SidedishType extends Model
{
    public function sidedishes()
    {
        return $this->hasMany(Sidedish::class);
    }
}
