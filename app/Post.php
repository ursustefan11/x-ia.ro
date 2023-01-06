<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $dates = ['published_at'];

    public function user()
    {
      return $this->belongsTo('App\User', 'user_id');
    }
    //
    public function categories()
    {
      return $this->hasMany('App\Category');
    }

    //
    public function category_post_test()
    {
      return $this->belongsToMany('App\Category', 'category_post', 'post_id', 'category_id');
    }
}
