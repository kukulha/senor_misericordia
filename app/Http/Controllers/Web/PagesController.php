<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Gospel;

class PagesController extends Controller
{
    public function index()
    {
        $gospels = Gospel::orderBy('id', 'DESC')->paginate(3);
    	$events = Event::orderBy('id', 'DESC')->paginate(3);
        return view('index', compact('events', 'gospels'));
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
    public function gospels()
    {
        $gospels = Gospel::orderBy('id', 'DESC')->paginate(20);
        return view('web.gospels', compact('gospels'));
    }
    public function gospel($slug)
    {
        $gospel = Gospel::where('slug', $slug)->first();
        return view('web.gospel', compact('gospel'));
    }
}
