<x-layout>
@props(['eventgroup', 'header'=>['Id', 'Beginn', 'Veranstaltung', 'Ort', 'Fahrt']])
@if(count($eventgroup))
@foreach($eventgroup as $events)
<div class="flex justify-center items-center p-8">
<table class=" max-w-screen-xl border-collapse border border-slate-400">
    <thead>
      <tr>
        <th colSpan="5" class="
        p-2 pl-4 font-bold
       text-orange-800
       text-center">
            {{$events[$loop->iteration]->centre->name}}
        </th>
      </tr>
        <tr class="bg-slate-400">
            @foreach($header as $head)
        <x-tableheader :title="$head"/>
            @endforeach
      </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
      <tr class="{{($loop->iteration) % 2 == 0 ? 'bg-gray-200' : 'bg-white'}}">
        <x-table-label content="{{$event->id}}"/>
        <x-table-label content="{{date_format(date_create($event->ev_date), 'd.m.Y')}}"/>
        <x-table-label content="{{$event->title}}"/>
        <x-table-label content="{{$event->destination}}"/>
            <div x-label="{open: false}">
        <x-table-btn-group
        text_btn1="Biete"
        text_btn2="Suche"
        action="open=true; location.href"
        location_btn1="{{route('alltransfer', ['event'=>$event->id, 'mode'=>'offer'])}}"
        location_btn2="{{route('alltransfer', ['event'=>$event->id, 'mode'=>'request'])}}"
        />
        </div>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
  @endforeach
  @else
  <div class="font-semibold flex justify-center p-6">
  Zur Zeit keine Veranstaltungen eingetragen
  </div>
  @endif
</x-layout>
