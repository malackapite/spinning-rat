<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoingTask extends Model
{
    use HasFactory;

    //protected $primaryKey= ["amongus_id", "task_id"];

    public function amongus(){
        return $this->belongsTo("App\Models\Amongus");
    }

    public function task(){
        return $this->belongsTo("App\Models\Task");
    }
}
