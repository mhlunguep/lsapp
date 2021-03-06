<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    //Primary Key
    protected $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
    

    public function user(){
        return $this->belongsTo('App\user');
    }
}
