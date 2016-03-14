<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Jaagir extends Model
{
    protected $fillable = [
        'title',
        'total_openings',
        'salary',
        'experience',
        'category',
        'position',
        'level',
        'type',
        'education',
        'location',
        'description',
        'specification',
        'published_at',
        'expiry_at',
        'apply_description',
        'apply_email',
        'apply_website',
        'user_id'

    ];

    protected $dates = ['published_at'];


    public function scopePublished($query){
        $query->where('updated_at', '<=', Carbon::now())->get();
    }


    public  function setPublishedAtAttribute($date){
        // $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

        //if we set at future, time should be at midnight -- there was no time before
        $this->attributes['published_at'] = Carbon::parse($date);
    }


    public function user(){
        return $this-> belongsTo('App\User'); //shouold have user_id column
    }

    public function appliers(){
        return $this-> hasMany('App\Appliers'); //shouold have user_id column
    }
}
