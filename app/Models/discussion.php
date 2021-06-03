<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discussion extends Model
{
    use HasFactory;

    public function discussion(){
        return $this->belongsTo('App\Models\forum');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function reply(){
        return $this->hasMany('App\Models\discussion_reply');
    }
}
