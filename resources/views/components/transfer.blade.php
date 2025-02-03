
<x-layout>
    @props(['header'=>['Fahrt', 'Name', 'Start', 'Über', 'Ziel', 'Nachricht', '']])
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
            <x-table-data fontbold="true" content="Veranstaltungs ID:"/>
            <x-table-data content="{{$event->id}}"/>
        </tr>
        <tr class="bg-white">
            <x-table-data fontbold="true" content="Veranstalter:"/>
            <x-table-data content="{{$centre}}"/>
        </tr>
        <tr class="bg-gray-200">
            <x-table-data fontbold="true" content="Veranstaltung:"/>
            <x-table-data content="{{$event->title}}"/>
        <tr>
        <tr class="bg-white">
            <x-table-data fontbold="true" content="Veranstaltungsort"/>
            <x-table-data content="{{$event->destination}}"/>
        <tr>
        <tr class="bg-gray-200">
            <x-table-data fontbold="true" content="Veranstaltungsbeginn"/>
            <x-table-data content="{{date_format(date_create($event->ev_date), 'd.m.Y')}}"/>
        <tr>
    </table>
</div>
<div x-data="{open: false}">
<div class="flex justify-center items-center p-2 mb-2">

    <x-dhamma-button
    text="Neues {{($mode==='offer')? 'Mitfahrangebot' : 'Mitfahrgesuch'}} eintragen"
    icon="fa-regular fa-envelope"
    action="open"
    location="true"/>
</div>
<x-transfer-modal mode="{{$mode}}"/>
</div>
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
                <x-tableheader :title="$head "/>
                    @endforeach
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-slate-800">
            @foreach($alltransfer as $transfer)
          <tr class="{{($loop->iteration) % 2 == 0 ? 'bg-gray-200' : 'bg-white'}}">
            <x-table-data content="{{$transfer->id}}"/>
            <x-table-data content="{{$transfer->name}}"/>
            <x-table-data content="{{$transfer->start}}"/>
            <x-table-data content="{{$transfer->via}}"/>
            <x-table-data content="{{$transfer->destination}}"/>
            <x-table-data content="{{$transfer->message}}"/>
                <td class="
                p-2 pl-4
                text-slate-500
                dark:text-slate-400
                text-left">
                <x-dhamma-button text="Kontakt" icon="fa-regular fa-envelope" action="location.href" location="#"/>
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
