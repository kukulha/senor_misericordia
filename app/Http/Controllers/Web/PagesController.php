<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class PagesController extends Controller
{
    public function index()
    {
    	$events = Event::orderBy('id', 'DESC')->paginate(3);
        return view('index', compact('events'));
    }
    public function events()
    {
    	$events = Event::orderBy('id', 'DESC')->paginate(20);
    	return view('web.events', compact('events'));
    }
    public function event($slug)
    {
    	$event = Event::where('slug', $slug)->first();
    	return view('web.event', compact('event'));
    }
}
