<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Models\category', 'category_id');
    }

    public function discussions(){
        return $this->HasMany('App\Models\discussion');
    }

    public function posts(){
        return $this->HasMany('App\Models\post');
    }

    protected $fillable=[
        'id','title','desc', 'user_id','forum_id', 'notify'
    ];
}
