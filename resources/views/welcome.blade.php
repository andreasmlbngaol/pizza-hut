@extends('layouts.main')

@section('main')
<div class="container">
    <h1>Welcome, {{ $user->name }}</h1>
</div>
@endsection
