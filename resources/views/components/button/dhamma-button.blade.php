@props(['icon', 'text', 'action', 'location'])
  <button onclick="{{$action}}='{{$location}}'"
        class="rounded-md mt-2 mr-2 py-2 px-6 border-orange-900 text-center bg-orange-900 text-white font-semibold transition-all shadow-md focus:shadow-none hover:text-white hover:bg-orange-600 border text-xs"
          type="button">
      <i class="{{$icon}}"></i>
     {{$text}}
    </button>
