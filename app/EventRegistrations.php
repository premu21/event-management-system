<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Events;

class EventRegistrations extends Model
{
    protected $fillable = ['events_id','name', 'phone', 'email'];

    // public function event() {
    //     return $this -> belongsTo(Events::class);
    // }

    // public function authentic_user($user_id) {
    //     return $this -> event() -> where('user_id', $user_id);
    // }
}
