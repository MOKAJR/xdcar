<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcar extends Model
{
    protected $table = 'showcars';
    protected $fillable = ['id' , 'name' , 'make' , 'model', 'des' , 'qun' , 'activ' , 'photo1', 'photo2', 'photo3'];
     
    public function user(){
        
        return $this->belongsTo('App\User');
   
     }
 
}
