<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\Event;
use App\Models\Transfer;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event): View
    {
        $mode = request()->get('mode');
        $alltransfer = Transfer::orderBy("created_at", "desc")->where('event_id', $event->id)->where('mode', $mode)->get();
        $centre = Centre::where('identifier', $event->centre_fk)->first();
        return view('components.transfer')->with(['event' => $event, 'centre' => $centre->name, 'mode' => $mode, 'alltransfer' => $alltransfer]);
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
    public function store(Request $request): View
    {
        $eventWithCtr = Event::with('centre')->where('id', $request->eventId)->first();
        $centre = Centre::where('identifier', $eventWithCtr->centre_fk)->first();

        $transfer = Transfer::create([
            'event_id' => $request->eventId,
            'centre_fk' => $eventWithCtr->centre->identifier,
            'start' => $request->start,
            'via' => $request->via,
            'destination' => $request->destination,
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
            'mode' => $request->mode,

        ]);

        $transfer->save();

        $alltransfer = Transfer::orderBy("created_at", "desc")->where('event_id', $request->eventId)->where('mode', $request->mode)->get();

        return view('components.transfer')->with([
            'event' => $eventWithCtr,
            'centre' => $centre->name,
            'mode' => $request->mode,
            'alltransfer' => $alltransfer,
            'newTransfer' => true
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transfer $transfer)
    {
        //
    }
}
