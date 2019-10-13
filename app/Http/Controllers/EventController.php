<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    protected $filliable = ['path'];
    public function getAllEvents() {
        $event = Event::all();
        return $event;
    }

    public function storeImgEvent(Request $request) {
       if ($request->hasFile('image')) {
           $path = $request->image->store('public');
           Images::Create(['path' => $path]);
       }
    }

    public function GetUrlPath() {
        // return \Storage::files('public')->exists('preEvent7.jpg');
        return \Storage::allFiles('public');
        // return \Storage::url('preEvent77.jpg');

    }
}
