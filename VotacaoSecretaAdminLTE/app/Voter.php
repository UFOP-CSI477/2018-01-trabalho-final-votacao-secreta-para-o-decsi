<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model {

    protected $fillable = [
        'user_id', 'topic_id', 'created_at', 'updated_at'
    ];

    public function topico() {
        return $this->belongsTo('App\Topic', 'topic_id', 'id');
    }

    public function usuario() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
