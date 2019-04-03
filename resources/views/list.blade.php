@extends('layout')
@section('title', 'List')

@section('content')
    <div class="title m-b-md">
        List
    </div>

    @foreach($contacts as $contact)
        <li>{{ $contact->firstName }}</li>
    @endforeach
@endsection