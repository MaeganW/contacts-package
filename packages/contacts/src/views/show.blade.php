@extends('contacts::layout')
@section('title', 'Contacts')

@section('content')
    <div class="title m-b-md">
        {{ $contact->firstName }} {{ $contact->lastName }}
    </div>

    <div>
        <p>Email: {{ $contact->email }}</p>
    </div>

    <div>
        <p>Address: {{ $contact->address }}</p>
    </div>

    <div>
        <p>Phone: {{ $contact->phone }}</p>
    </div>

    <div>
        <button>
            <a href="/contacts/{{ $contact->id }}/edit">Edit</a>
        </button>
    </div>
@endsection
