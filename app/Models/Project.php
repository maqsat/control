<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['title','type_id'];

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function status()
    {
        return $this->belongsToMany('App\Models\Status')->withPivot('sum', 'start', 'end');
    }
}
