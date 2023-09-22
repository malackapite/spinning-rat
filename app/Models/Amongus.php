<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amongus extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "color" ,
        "role_id"
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
