@extends('layouts.main-layout')
@section('content')
<h1>Drinks:</h1>

    <a href="{{ route('drink-create') }}">CREATE</a> {{-- collego la page drinks-index alla page drink-create --}}

    <ul>
        @foreach ($drinks as $drink)

        <li>
            <a href="{{ route('drink-show', $drink -> id) }}"> {{-- drink-show corrisponde al nome della rotta definito da noi in web.php --}}       
            {{ $drink -> name }}
            </a>
            <a href="{{ route('drink-edit', $drink -> id) }}">EDIT</a>
            <a href="{{ route('drink-delete', $drink -> id) }}">DELETE</a>
        </li>

        @endforeach 
    </ul>
@endsection