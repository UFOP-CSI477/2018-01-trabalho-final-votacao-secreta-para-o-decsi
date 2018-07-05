<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

    protected $fillable = [
        'user_id', 'title', 'description', 'document', 'opened', 'visible', 'created_at', 'updated_at'
    ];

    public function opcoes() {
        return $this->hasMany('App\Vote', 'topic_id', 'id');
    }

    public function secretario() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function participantes() {
        return $this->hasMany('App\VoteIn', 'topic_id', 'id');
    }

    public function convidados() {
        return $this->hasMany('App\Voter', 'topic_id', 'id');
    }

    public function isConvidado($id) {

        $convidados = $this->convidados()->get();

        foreach ($convidados as $key) {
            if ($key->user_id === $id) {
                return true;
            }
        }
        return false;
    }

    public function jaVotou($id) {
        $participantes = $this->participantes()->get();
        foreach ($participantes as $key) {
            if ($key->user_id === $id) {
                return true;
            }
        }
        return false;
    }

    public function permitidoVotar($id) {
        if (!$this->jaVotou($id) && $this->isConvidado($id)) {
            return true;
        }
        return false;
    }

}
