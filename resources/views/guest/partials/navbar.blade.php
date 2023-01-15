<nav>
    <ul>
        @foreach ($menu as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
