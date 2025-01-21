@props(['events'])
@if(count($events))
<div class="flex justify-center items-center">
<table class=" max-w-screen-xl border-collapse border border-slate-400">
    <thead>
      <tr class="bg-slate-400">
        <th class="
        font-medium
        p-2 pl-4
        text-white
         text-left">Id</th>
        <th class="
        font-medium
        p-2 pl-4
        text-white
         text-left">Beginn</th>
        <th class="
        font-medium
        p-2 pl-4
        text-white
         text-left">Veranstaltung</th>
         <th class="
        font-medium
        p-2 pl-4
        text-white
         text-left">Ort</th>
        <th class="
        font-medium
        p-2 pl-4
        text-white
         text-left">Fahrten</th>
      </tr>
    </thead>
    <tbody class="bg-white dark:bg-slate-800">
        @foreach($events as $event)
      <tr class="{{($loop->iteration) % 2 == 0 ? 'bg-gray-200' : 'bg-white'}}">
        <td class="
          p-2 pl-4
         text-slate-500
         dark:text-slate-400
         text-left">
         {{$event->id}}</td>
        <td class="
          p-2 pl-4
         text-slate-500
         dark:text-slate-400
         text-left">
         {{date_format(date_create($event->ev_date), 'd.m.Y')}}</td>
        <td class="
        p-2 pl-4
         text-slate-500
         dark:text-slate-400
         text-left">
         {{$event->title}}</td>
         <td class="
         p-2 pl-4
          text-slate-500
          dark:text-slate-400
          text-left">
          {{$event->destination}}</td>
        <td class="p-2 pl-4">
    <div class="row flex">
        <button onclick="location.href='{{route('alltransfer', ['event'=>$event->id, 'mode'=>'offer'])}}'"
        class="rounded-md rounded-r-none bg-transparent py-2 border-orange-900 text-center text-orange-900 font-semibold transition-all shadow-md focus:shadow-none hover:text-white hover:bg-orange-600 px-2 border text-xs"
          type="button"
      >
      <i class="fa-solid fa-car"></i>
      Biete
      </button>
        <button onclick="location.href='{{route('alltransfer', $event->id).'?mode=request'}}'"
          class="rounded-md rounded-l-none bg-transparent py-2 border-orange-900 text-center text-orange-900 font-semibold transition-all shadow-md focus:shadow-none hover:text-white hover:bg-orange-600 px-2 border text-xs"
          type="button">
        <i class="fa-regular fa-thumbs-up"></i>
        Suche
        </button>
      </div>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @else
  No Events
  @endif
