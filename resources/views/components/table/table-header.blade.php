@props(['title', 'colSpan'=>1, 'center'=>false])
<th colSpan="{{$colSpan}}"
class="
        font-medium
        p-2 pl-4
        text-white
         {{($center) ? 'text-center' : 'text-left'}}">{{$title}}</th>
