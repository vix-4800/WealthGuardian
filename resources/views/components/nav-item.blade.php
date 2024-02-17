@props(['name','route'])

<li>
    <a href="{{route($route)}}" class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white" aria-current="page">
        {{$name}}
    </a>
</li>
