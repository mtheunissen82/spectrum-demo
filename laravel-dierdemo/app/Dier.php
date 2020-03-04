<?php

namespace App;

use App\DierSoort;
use Illuminate\Database\Eloquent\Model;

class Dier extends Model
{
    protected $table = 'dier';

    public function soort()
    {
        return $this->belongsTo(\App\DierSoort::class);
    }
}
