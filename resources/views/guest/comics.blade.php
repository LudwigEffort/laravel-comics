@extends('guest.layouts.base')

@section('content')
    {{-- I have to print  product page --}}
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic['title'] }}</li>
        @endforeach
    </ul>
@endsection
