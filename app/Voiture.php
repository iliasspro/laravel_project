<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Voiture extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
