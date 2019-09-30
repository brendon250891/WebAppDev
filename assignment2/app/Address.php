<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Address extends Model
{
    /**
     * Allows the variables in the array to be mass assigned.
     */
    protected $fillable = [
        'streetNumber', 'streetName', 'city', 'postCode', 'state_id', 'user_id'
    ];

    /**
     * Links the address(es) to their user(s).
     */
    public function user() {
        return $this->belongsTo('User');
    }

    /**
     * Links an address to its state.
     */
    public function state() {
        return $this->hasOne('App\State');
    }
}
