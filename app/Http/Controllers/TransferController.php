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
        $alltransfer = Transfer::get()->where('event_id', $event->id)->where('mode', $mode);
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
    public function store(Request $request)
    {
        //
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
