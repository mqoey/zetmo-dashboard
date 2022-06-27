<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }

    public function neighbourhood(){
        return $this->hasMany(Neighbourhood::class);
    }
}
