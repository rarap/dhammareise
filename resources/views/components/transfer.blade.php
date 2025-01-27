
</div>

<x-layout>
<div>
    @if($mode==='offer')
    <div>
        Mitfahrangebote
    </div>
    @else
    <div>
        Mitfahrgesuche
    </div>
    @endif
    <div>
        Veranstaltungs ID: {{$event->id}}
    </div>
    <div>
        Veranstalter: {{$centre}}
    </div>
    <div>
        Veranstaltung: {{$event->title}}
    </div>
    <div>
       Veranstaltungsort: {{$event->destination}}
    </div>
    <div>
       Veranstaltungsbeginn: {{date_format(date_create($event->ev_date), 'd.m.Y')}}
    </div>
    <br/><br/>

@foreach ($alltransfer as $transfer )
<div>Fahrt ID: {{$transfer->id}}</div>
<div>Name: {{$transfer->name}}</div>
<div>Start: {{$transfer->start}}</div>
<div>Via: {{$transfer->via}}</div>
<div>Ziel: {{$transfer->destination}}</div>
<div>Nachricht: {{$transfer->message}}</div>
<br/><br/>
@endforeach


</x-layout>
