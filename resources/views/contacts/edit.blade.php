@extends('layout')
@section('title', 'Edit')

@section('content')
    <div class="title m-b-md">
        Edit
    </div>

    @foreach($contacts as $contact)
        <li>{{ $contact->firstName }}</li>
    @endforeach
@endsection