<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Events extends Model
{
    protected $fillable = [
        'title', 'description', 'venue','times','fee','photo','video','user_id'
    ];

    // public function user() {
    //     return $this -> belongsTo(User::class);
    // }

    // public function eventregistrations() {
    //     return $this->hasMany(EventRegistrations::class);
    // }
}
