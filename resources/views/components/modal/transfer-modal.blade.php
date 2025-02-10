@props(['mode', 'eventId'])
<div x-cloak x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div @click.away="open=false" class="bg-white p-6 rounded-lg shadow-md w-full max-w-2xl border-2 border-orange-900 ">
        <div role="alert" class="mt-3 relative flex flex-col w-full p-3 text-sm text-white bg-red-600 rounded-md">
            <p class="flex text-base">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 mr-2 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path></svg>
              Achtung
            </p>
            <p class="ml-4 p-3 text-center">
                Bis auf Ihre E-Mail Adresse sind Ihre Daten sind für jeden sichtbar!
                Geben Sie deshalb <u>NIEMALS</u> Ihren Nachnamen, Telefonnummer, Adresse usw. an!
            </p>
          </div>
          <div class="flex justify-center items-center p-8">
            <form method="POST" action="{{ route('alltransfer.store', ['eventId'=>$eventId]) }}" >
                @csrf
                <input id="mode" name="mode" type="hidden" value="{{$mode}}">
                <input id="eventId" name="eventId" type="hidden" value="{{$eventId}}">
            <table class=" max-w-screen-md border-collapse border border-slate-400">
                <thead>
                  <tr class="bg-slate-400">
                    <x-table-header center="true" colSpan="2" title="Neues {{($mode==='offer')? 'Mitfahrangebot' : 'Mitfahrgesuch'}} eintragen"/>
                  </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">

                  <tr class="bg-white">
                    <x-table-label content="Vorame:" required="true"/>
                    <x-table-input id="name" name="name" minlength="3" maxlength="10" required="true" type="text" />
                  </tr>
                  <tr class="bg-white">
                    <x-table-label content="Email:" required="true"/>
                    <x-table-input id="email" name="email" minlength="3" maxlength="20" required="true" type="email" />
                  </tr>
                  <tr class="bg-white">
                    <x-table-label content="Start:" required="true"/>
                    <x-table-input id="start" name="start" minlength="3" maxlength="20" required="true" type="text" />
                  </tr>
                  <tr class="bg-white"/>
                    <x-table-label content="Über:"/>
                    <x-table-input id="via" name="via" minlength="3" maxlength="20" required="false" type="text" />
                  </tr>
                  <tr class="bg-white">
                    <x-table-label content="Ziel:" required="true"/>
                    <x-table-input id="destination" name="destination" minlength="3" maxlength="20" required="true" type="text" />
                  </tr>
                  <tr class="bg-white">
                    <x-table-label content="Nachricht:" required="true" top="true"/>
                    <x-table-text-area/>
                  </tr>
                </tbody>
            </table>
            <div class="flex justify-center items-center">
                <x-dhamma-button
                type="close"
                text="Abbrechen"
                icon="fa-regular fa-rectangle-xmark"/>
            <x-dhamma-button text="Absenden" icon="{{($mode==='offer')? 'fa-solid fa-car' : 'fa-solid fa-thumbs-up'}}" type="submit" />
            </div>
        </form>
            </div>

    </div>
