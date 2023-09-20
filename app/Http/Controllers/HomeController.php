<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Event;
use App\Models\Sponsor;
use App\Models\Stage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $days = Day::all();
        $sponsors = Sponsor::all();
        $events = Event::all();
        return view('frontend.home.index', compact('days', 'sponsors', 'events'));
    }

    public function activities()
    {
        return view('frontend.home.activities', ['title'=> __('home.activities.title')]);
    }

    public function registration()
    {
        return view('frontend.home.register', ['title'=> __('home.registration.title')]);
    }
}
