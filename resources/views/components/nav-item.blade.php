@props(['name','route'])

<li>
    <a href="{{route($route)}}" class="block py-2 pl-3 pr-4 text-whiterounded hover:text-purple-200 lg:bg-transparent lg:p-0" aria-current="page">
        {{$name}}
    </a>
</li>
