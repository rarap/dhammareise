@props(['events'])
@if(count($events))
<div>
<table class="table-auto ">
    <thead>
      <tr class="bg-slate-400">
        <th class="border-b
        dark:border-slate-600
        font-medium
        p-4 pl-8
        text-white
         text-left">Id</th>
        <th class="border-b
        dark:border-slate-600
        font-medium
        p-4 pl-8
        text-white
         text-left">Beginn</th>
        <th class="border-b
        dark:border-slate-600
        font-medium
        p-4 pl-8
        text-white
         text-left">Veranstaltung</th>
        <th class="border-b
        dark:border-slate-600
        font-medium
        p-4 pl-8
        text-white
         text-left">Fahrten</th>
      </tr>
    </thead>
    <tbody class="bg-white dark:bg-slate-800">
        @foreach($events as $event)
      <tr class="{{($loop->iteration) % 2 == 0 ? 'bg-gray-200' : 'bg-white'}}">
        <td class="border-b
         border-slate-100
          dark:border-slate-700
          p-4 pl-8
         text-slate-500
         dark:text-slate-400
         text-left">
         {{$event->id}}</td>
        <td class="border-b
         border-slate-100
          dark:border-slate-700
          p-4 pl-8
         text-slate-500
         dark:text-slate-400
         text-left">
         {{$event->ev_date}}</td>
        <td class="border-b
         border-slate-100
          dark:border-slate-700
          p-4 pl-8
         text-slate-500
         dark:text-slate-400
         text-left">
         {{$event->title}}</td>
        <td class="border-b
         border-slate-100
          dark:border-slate-700
          p-4 pl-8
         text-slate-500
         dark:text-slate-400
         text-left">
      <button class="bg-transparent
       hover:bg-orange-500
        text-orange-700 font-semibold
        hover:text-white py-2 px-2 border text-xs
        border-orange-700 hover:border-transparent rounded">
        <i class="fa-solid fa-car"></i>
        Angebote
      </button>
      <button class="bg-transparent
       hover:bg-orange-500
        text-orange-700 font-semibold
        hover:text-white py-2 px-2 border text-xs
        border-orange-700 hover:border-transparent rounded">
        <i class="fa-regular fa-thumbs-up"></i>
        Gesuche
      </button>
    </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @else
  No Events
  @endif
