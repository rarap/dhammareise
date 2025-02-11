@props(['id', 'name', 'minlength', 'maxlength', 'required'=>true, 'type'])
<td class="py-2 px-2">
<input
class="
shadow
appearance-none
border
rounded
py-2
px-3
text-slate-500
leading-tight
focus:ring-orange-500 focus:border-orange-500
focus:shadow-outline"
size="30"
id="{{$id}}"
name="{{$name}}"
type="{{$type}}"
{{($required) ? "required" : ""}}
minlength="{{$minlength}}"
maxlength="{{$maxlength}}">
@if($type=='email')
<div class="text-xs text-red-900">Ihre Mailadresse wird nicht öffentlich angezeigt</div>
@else
@endif
</td>
