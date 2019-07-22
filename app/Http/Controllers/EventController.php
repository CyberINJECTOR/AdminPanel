<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function getAllEvents() {
        $event = Event::all();
        return $event;
    }
}
