@props(['icon', 'text', 'action', 'location', 'type'=>'button'])
<button
@if($type!='submit' && $type!='close')
@click="{{$action}}='{{$location}}'"
@else
@endif
@if($type=='close')
@click="open=false"
@else
@endif
  class="rounded-md mt-2 mr-2 py-2 px-6 border-orange-900 text-center bg-orange-900 text-white font-semibold transition-all shadow-md focus:shadow-none hover:text-white hover:bg-orange-600 border text-xs"
  type="submit">
  <i class="{{$icon}}"></i>
  {{$text}}
</button>

