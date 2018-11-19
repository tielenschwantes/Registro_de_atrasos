<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    public function aluno(){
    	return $this->belongsTo("App\User");
    }
}
