<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $directory = "/images/";
    use SoftDeletes;
//    protected $table = 'posts';
//    protected $primaryKey = 'id';
    protected $dates = ['deleted_At'];

    protected $fillable = [
        'path',
        'title',
        'content'
    ];


    public function user(){

        return $this->belongsTo('App\User');

    }

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public static function scopeLatest($query){
        return $query->orderBy('id', 'asc')->get();
    }

    public function getPathAttribute($value){
        return $this->directory.$value;
    }
}
