<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use App\Events;
use App\Http\Controllers\Controller;
use App\EventRegistrations;
use App\Http\Resources\Events as EventResource;
use DB;
class EventController extends Controller
{
    public function index() {
        return Events::all();
    }

    public function show($id) {
        return new EventResource(Events::findorFail($id));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $event = Events::create($request->all());

        return (new EventResource($event))
                ->response()
                ->setStatusCode(201);
    }

    public function eventusers(Request $request) {
        //$user_id = $request->user_id;
        var_dump($request);
        //$event = DB::table('events')->where(['user_id',$user_id],['id',$id]);
        //$event_id = $event-> id;
        //DB::table('event_registrations')->where(['events_id',$user_id],[])->get();
        //return $event;
    }

    public function registeruser(Request $request) {
        return EventRegistrations::create($request->all());
    }
}
