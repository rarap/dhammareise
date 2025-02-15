@props(['mode', 'transfer', 'event'])
<div x-cloak x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div @click.away="open=false" class="bg-white p-4 rounded-lg shadow-md w-full max-w-2xl border-2 border-orange-900 ">
        <div class="flex justify-center items-center p-md-4 p-4">
            <form method="POST" action="{{ route('alltransfer.sendTransferMail', ['eventId'=>$event->id]) }}" >
                @csrf
                <input id="mode" name="mode" type="hidden" value="{{$mode}}">
                <input id="transferId" name="transferId" type="hidden" value="{{$transfer->id}}">
            <table class=" max-w-screen-md border-collapse border border-slate-400">
                <thead>
                  <tr class="bg-slate-400">
                    <x-table-header center="true" colSpan="2" title="Kontakt zu {{$transfer->name}} aufnehmen"/>
                  </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                    <tr class="bg-white">
                        <x-table-label fontbold="true" content="Veranstalter:"/>
                        <x-table-label content="{{$event->centre->name}}"/>
                    </tr>
                    <tr class="bg-gray-200">
                        <x-table-label fontbold="true" content="Veranstaltungsort:"/>
                        <x-table-label content="{{$event->destination}}"/>
                    </tr>
                    <tr class="bg-white">
                        <x-table-label fontbold="true" content="Veranstaltung:"/>
                        <x-table-label content="{{$event->title}}"/>
                    </tr>
                    <tr class="bg-gray-200">
                        <x-table-label fontbold="true" content="Datum"/>
                        <x-table-label content="{{date_format(date_create($event->ev_date), 'd.m.Y')}}"/>
                        </tr>
                    <tr class="bg-white">
                        <x-table-label fontbold="true" content="Fahrt ID:"/>
                        <x-table-label content="{{$transfer->id}}"/>
                     </tr>
                    <tr class="bg-gray-200">
                        <x-table-label fontbold="true" content="Start/Ziel"/>
                        <x-table-label content="{{$transfer->start}}/{{$transfer->destination}}"/>
                     </tr>
                  <tr class="bg-white">
                    <x-table-label content="Mein Name:" required="true"/>
                    <x-table-input id="name" name="name" minlength="3" maxlength="20" required="true" type="text" />
                  </tr>
                  <tr class="bg-white">
                    <x-table-label content="Meine Email:" required="true"/>
                    <x-table-input id="email" name="email" minlength="3" maxlength="20" required="true" type="email" />
                  </tr>
                  <tr class="bg-white">
                    <x-table-label content="Meine Nachricht:" required="true" top="true"/>
                    <x-table-text-area/>
                  </tr>
                </tbody>
            </table>
            <div class="flex justify-center items-center">
                <x-dhamma-button
                type="close"
                text="Abbrechen"
                icon="fa-regular fa-rectangle-xmark"/>
            <x-dhamma-button text="Absenden" icon="{{($mode==='offer')? 'fa-solid fa-thumbs-up' : 'fa-solid fa-car'}}" type="submit" />
            </div>
        </form>
            </div>

    </div>
