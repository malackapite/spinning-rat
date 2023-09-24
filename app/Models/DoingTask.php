<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoingTask extends Model
{
    use HasFactory;

    protected $table="doing_tasks";
    protected $primaryKey=array("amongus_id","task_id");
    public $incrementing=false;
    protected $fillable=["amongus_id","task_id","id_done"];
    public function amongus(){
        return $this->belongsTo("App\Models\Amongus");
    }

    public function task(){
        return $this->belongsTo("App\Models\Task");
    }

    protected function setKeysForSaveQuery(Builder $query)
    {
        return $query->where('amongus_id', $this->getAttribute('amongus_id'))
            ->where('task_id', $this->getAttribute('task_id'));
    }
}
