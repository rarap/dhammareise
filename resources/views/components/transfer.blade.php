
<x-layout>
    @props(['header'=>['Fahrt', 'Name', 'Start', 'Über', 'Ziel', 'Nachricht', '']])
    @if(isset($newTransfer) or isset($mailSent))
    <div class="flex justify-center items-center p-6">
        <div role="alert" class="max-w-screen-md flex-col justify-center items-center p-3 text-sm text-white bg-green-600 rounded-md">
            <p class="flex text-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 mr-2 mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path></svg>
                Vielen Dank!
            </p>
            @isset($newTransfer)
            <p class="ml-4 p-3 text-center">
                Ihr {{($mode==='offer') ? 'Angebot' : 'Gesuch'}} wurde erfolgreich eintragen!
            </p>
            @endisset
            @isset($mailSent)
            <p class="ml-4 p-3 text-center">
                Ihre Nachricht wurde erfolgreich zugestellt und die Person kann sich jetzt mit Ihnen per Mail in Verbindung setzen.
            </p>
            @endisset

        </div>
    </div>
    @endif

    <div class="font-bold flex justify-center items-center text-orange-800 p-2 pl-4">
    @if($mode==='offer')
    Mitfahrangebote zum {{$centre}}
    @else
    Mitfahrgesuche zum {{$centre}}
    @endif
</div>
    <div class="flex justify-center items-center p-6">
        <table class="table-auto border-collapse border max-w-screen-xl  border-orange-800 ">
        <tr class="bg-gray-200">
            <x-table-label fontbold="true" content="Veranstaltungs ID:"/>
            <x-table-label content="{{$event->id}}"/>
        </tr>
        <tr class="bg-white">
            <x-table-label fontbold="true" content="Veranstalter:"/>
            <x-table-label content="{{$centre}}"/>
        </tr>
        <tr class="bg-gray-200">
            <x-table-label fontbold="true" content="Veranstaltung:"/>
            <x-table-label content="{{$event->title}}"/>
        <tr>
        <tr class="bg-white">
            <x-table-label fontbold="true" content="Veranstaltungsort"/>
            <x-table-label content="{{$event->destination}}"/>
        <tr>
        <tr class="bg-gray-200">
            <x-table-label fontbold="true" content="Veranstaltungsbeginn"/>
            <x-table-label content="{{date_format(date_create($event->ev_date), 'd.m.Y')}}"/>
        <tr>
        </table>
</div>
<div x-data="{open: false}">
<div class="flex justify-center items-center p-2 mb-2">
    <x-dhamma-button
    text="Neues {{($mode==='offer')? 'Mitfahrangebot' : 'Mitfahrgesuch'}} eintragen"
    icon="fa-solid {{($mode==='offer'? 'fa-car': 'fa-thumbs-up')}}"
    action="open"
    location="true"/>
</div>
<x-transfer-modal mode="{{$mode}}" eventId="{{$event->id}}"/>
</div>


@if(count($alltransfer))
<div class="flex justify-center p-5">
   <table class="max-w-screen-xl border-collapse border border-slate-400">
        <thead>
          <tr>
            <th colSpan="7" class="
            p-2 pl-4 font-bold
           text-orange-800
           text-center">
           @if($mode==='offer')
                Fahrer:in bietet Mitfahrt
            @else
                Mitfahrer:in sucht Mitfahrgelegenheit
            @endif
            </th>
          </tr>
            <tr class="bg-slate-400">
                @foreach($header as $head)
                <x-table-header title="{{$head}}"/>
                    @endforeach
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-slate-800">
            @foreach($alltransfer as $transfer)
          <tr class="{{($loop->iteration) % 2 == 0 ? 'bg-gray-200' : 'bg-white'}}">
            <x-table-label content="{{$transfer->id}}"/>
            <x-table-label content="{{$transfer->name}}"/>
            <x-table-label content="{{$transfer->start}}"/>
            <x-table-label content="{{$transfer->via}}"/>
            <x-table-label content="{{$transfer->destination}}"/>
            <x-table-label content="{{$transfer->message}}"/>
                <td class="
                p-2 pl-4
                text-slate-500
                dark:text-slate-400
                text-left">
                <div x-data="{open: false}">
                    <div class="flex justify-center items-center p-2 mb-2">
                        <x-dhamma-button
                        text="Kontakt"
                        icon="fa-regular fa-envelope"
                        action="open"
                        location="true"/>
                    </div>
                    <x-contact-modal mode="{{$mode}}" :transfer="$transfer" :event="$event"/>
                    </div>
                    </div>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
@else
<div class="font-semibold flex justify-center p-6">
Zur Zeit keine
@if($mode==='offer')
Mitfahrangebote
@else
Mitfahrgesuche
@endif
vorhanden
</div>
@endif
</x-layout>
