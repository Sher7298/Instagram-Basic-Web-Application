<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
	protected $guaerded=[];
    public function user(){
  	return $this->belongsTo(User::class);
  } 


  protected $fillable = [
  	'caption','image'
  ];
}
