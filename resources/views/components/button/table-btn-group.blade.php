@props(['text_btn1', 'action', 'location_btn1', 'text_btn2', 'location_btn2'])
<td class="p-2 pl-4">
    <div class="row flex">
        <x-dhamma-button icon="fa-solid fa-car" text="{{$text_btn1}}" action={{$action}} location="{{$location_btn1}}"/>
        <x-dhamma-button icon="fa-solid fa-car" text="{{$text_btn2}}" action={{$action}} location="{{$location_btn2}}"/>
      </div>
    </td>
