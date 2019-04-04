@extends('contacts::layout')
@section('title', 'Contacts')

@section('content')
    <div class="title m-b-md">
        Contacts
    </div>

    @foreach($contacts as $contact)
        <li>
            <a href="/contacts/{{ $contact->id }}">
                {{ $contact->firstName }} {{ $contact->lastName }}
            </a>
        </li>
    @endforeach
@endsection
