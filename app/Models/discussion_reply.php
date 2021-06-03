<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discussion_reply extends Model
{
    use HasFactory;

    public function discussion(){
        return $this->belongsTo('App\Models\discussion');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
