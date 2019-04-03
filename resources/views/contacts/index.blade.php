@extends('layout')
@section('title', 'Contacts')

@section('content')
    <div class="title m-b-md">
        Contacts
    </div>

    @foreach($contacts as $contact)
        <li>{{ $contact->firstName }}</li>
    @endforeach
@endsection