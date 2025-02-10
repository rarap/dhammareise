@props(['content', 'fontbold' =>false, 'required'=>false, 'top'=>false])
<td class="
p-2 pl-4
text-slate-500
dark:text-slate-400
text-left
{{($top) ? 'align-text-top' : ''}}
{{($fontbold) == true ? 'font-semibold' : ''}}">
{{$content}}{{($required) ? '*' : ''}}</td>
