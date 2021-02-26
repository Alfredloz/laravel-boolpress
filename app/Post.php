<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];


    /** Get the category associate with the Post
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
   public function category()
   {
       return $this->belongsTo('App\Category');
   }


   public function tags()
   {
       return $this->belongsToMany('App\Tag');
   }

}
