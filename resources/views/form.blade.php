@extends('layout')
@section('title', 'Form')

@section('content')
    <div class="title m-b-md">
        Form
    </div>

    <form class="form" method="POST" action="/contacts">
        <label for="firstName" class="firstName">First Name</label>
        <input type="text" class="firstName" name="firstName">

        <label for="lastName" class="lastName">Last Name</label>
        <input type="text" class="lastName" name="lastName">

        <label for="address" class="address">Address</label>
        <input type="text" class="address" name="address">

        <label for="phone" class="phone">Phone</label>
        <input type="text" class="phone" name="phone">

        <button type="submit">Create Contact</button>
    </form>
@endsection