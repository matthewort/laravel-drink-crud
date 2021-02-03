@extends('layouts.main-layout')
@section('content')

<form action="{{ route('drink-update', $drink -> id) }}" method="POST">
    @csrf
    @method('POST')
    <label for="name">Name</label>
    <input name="name" type="text" value="{{ $drink -> name }}">
    <br>
    <label for="alcohol_content">Alcohol Content</label>
    <input name="alcohol_content" type="text" value="{{ $drink -> alcohol_content }}">
    <br>
    <label for="price">Price</label>
    <input name="price" type="text" value="{{ $drink -> price }}">
    <br>
    <input type="submit" value="UPDATE">
</form>

@endsection