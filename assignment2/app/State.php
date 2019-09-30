<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Disables timestamps
     */
    public $timestamps = false;

    /**
     * Links a state to an address.
     */
    public function address() {
        return $this->belongsTo('App\User', 'state_id');
    }
}
