<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'address',
        'website',
        'phone',
        'established_year',
        'employee_count',
        'bio',
        'focus_area',
        'user_id'
    ];

    public function users(){
        return $this->hasMany('App\Users');
    }
}
