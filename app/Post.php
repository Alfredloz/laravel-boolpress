<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];


    /** Get the category associate with the Post
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
   public function category()
   {
       return $this->belongsTo('App\Category');
   }

}
