@extends('contacts::layout')
@section('title', 'Profile')

@section('content')
    <div class="title m-b-md">
        Profile
    </div>

    <div class="links">
        <a href="{{ route('home') }}">Go to Home</a>
    </div>

    <div class="profile">
        <div>
            <label for="firstName" class="firstName">First Name: </label>
            <?php echo $_GET['firstName']; ?>
        </div>
        <div>
            <label for="lastName" class="lastName">Last Name: </label>
            <?php echo $_GET['lastName']; ?>
        </div>
    </div>
@endsection

