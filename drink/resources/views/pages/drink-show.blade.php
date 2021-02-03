@extends('layouts.main-layout')
@section('content')

<h1>Name: {{ $drink -> name }}</h1>
<h1>Alcohol content: {{ $drink -> alcohol_content }}</h1>
<h1>Price: {{ $drink -> price }}</h1>

@endsection