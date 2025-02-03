@props(['mode'])
<div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div @click.away="open=false" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md flex items-center justify-center  border-2 border-orange-600 ">
        <h3 class="text-lg font-semibold mb-4"></h3>
        Neues {{($mode==='offer')? 'Mitfahrangebot' : 'Mitfahrgesuch'}} eintragen

    </div>

    </div>
