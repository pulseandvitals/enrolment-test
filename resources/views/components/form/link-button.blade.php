@props(['href', 'route'])
<a class="font-normal text-md leading-tight" href="{{ isset($route) ? route($route) : $href }}"> {{ $slot }} </a>
