<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
 
    protected $fillable = [
        'topic_id', 'option', 'amount','default','created_at', 'updated_at'
    ];

    public function topico(){
        return $this->belongsTo('App\Topic','topic_id', 'id');
    }
    
}
