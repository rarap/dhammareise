@props(['content', 'fontbold' =>false])
<td class="
p-2 pl-4
text-slate-500
dark:text-slate-400
text-left
{{($fontbold) == true ? 'font-semibold' : ''}}">
{{$content}}</td>
