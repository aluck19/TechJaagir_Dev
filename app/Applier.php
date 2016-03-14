<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applier extends Model
{
    protected  $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'message',
        'resume_link',
        'jaagir_id'
    ];

    public function jaagirs(){
        return $this->belongsToMany('App\Jaagir');
    }
}
