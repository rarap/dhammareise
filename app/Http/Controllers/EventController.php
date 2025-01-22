<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $centreIdent = request()->get('centreIdent');
        $curCentre = Centre::get()->where('identifier', $centreIdent)->first();

        if ($centreIdent != null && $curCentre != null) {
            session()->put('centreIdent', $centreIdent);
            session()->put('centreName', $curCentre->name);

            $events = Event::get()->where('centre_fk', 'buddha_haus')->sortby('ev_date');
        } else {
            $events = Event::all()->sortby('ev_date');
        }


        return view('pages.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
