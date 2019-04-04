@extends('contacts::layout')
@section('title', 'Edit')

@section('content')
    <div class="title m-b-md">
        Edit Contact
    </div>

    <form method="POST" action="/contacts/{{ $contact->id }}" class="form">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <label for="firstName" class="firstName">First Name</label>
        <input type="text" class="firstName" name="firstName" value="{{ $contact->firstName }}">

        <label for="lastName" class="lastName">Last Name</label>
        <input type="text" class="lastName" name="lastName" value="{{ $contact->lastName }}">

        <label for="email" class="email">Email</label>
        <input type="text" class="email" name="email" value="{{ $contact->email }}">

        <label for="address" class="address">Address</label>
        <input type="text" class="address" name="address" value="{{ $contact->address }}">

        <label for="phone" class="phone">Phone</label>
        <input type="text" class="phone" name="phone" value="{{ $contact->phone }}">

        <br>
        <button type="submit">Update Contact</button>
    </form>


    <form method="POST" action="/contacts/{{ $contact->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}

        <button type="submit">Delete Contact</button>
    </form>
    {{-- @foreach($contacts as $contact)
        <li>{{ $contact->firstName }}</li>
    @endforeach --}}
@endsection
