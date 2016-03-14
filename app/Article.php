<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Fillable fields for an Article.
     *
     * @var array
     */
    protected  $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'

    ];


    //make published_at as Carbon instance
    /**
     * Additional fields to treat as Carbon instances.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    //query scope for published -- scopeName
    /**
     * Scope queries to articles that have been published.
     *
     * @param $query
     */
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now())->get();
    }

    //query scope for unpublished -- scopeName
    public function scopeUnpublished($query){
        $query->where('published_at', '>=', Carbon::now())->get();
    }

    //Mutator - before inserting the data to the table -- setNameAttribute
    /**
     * Set the published_at attribute.
     *
     * @param $date
     */
    public  function setPublishedAtAttribute($date){
       // $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

        //if we set at future, time should be at midnight -- there was no time before
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     *
     * Get the published_at attribute.
     * @param $date
     * @return string
     */
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
    
    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this-> belongsTo('App\User'); //shouold have user_id column
    }


    /**
     * Get the tags associated with given article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with current article.
     *
     * @return mixed
     */
    public function getTagListAttribute(){
        return $this->tags->lists('id');
    }
}
