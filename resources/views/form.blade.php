@extends('layout')
@section('title', 'Form')

@section('content')
    <div class="title m-b-md">
        Form
    </div>

    <form class="form" action="{{ route('profile') }}" method="get">
        <label for="firstName" class="firstName">First Name</label>
        <input type="text" class="firstName" name="firstName">

        <label for="lastName" class="lastName">Last Name</label>
        <input type="text" class="lastName" name="lastName">

        <label for="address" class="address">Address</label>
        <input type="text" class="address" name="address">

        <label for="age" class="age">Age</label>
        <input type="text" class="age" name="age">

        <input type="submit">
    </form>
@endsection