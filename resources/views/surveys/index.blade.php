@extends('layouts.main')

@section('main')
@if (session()->has('success'))
<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
<div class="col-lg-8 mt-3 mx-auto">

@if ($user === 'admin')
<a href="/surveys/create" class="btn btn-success my-2">Add New Survey Result</a>
@endif

<table class="table table-bordered text-center table-hover">
    <thead class="table-danger">
        <tr>
            <th>No</th>
            <th>Date</th>
            @if ($username === 'admin')
            <th>Outlet</th>
            @endif
            <th>Rating</th>
            <th style="width: 60%;">Description</th>
        </tr>
    </thead>
    <tbody>
@foreach ($surveys as $survey)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $survey->date }}</td>
    @if ($username === 'admin')
    <td>{{ $survey->user->name }}</td>
    @endif
    <td>{{ $survey->rating }}</td>
    <td class="text-start">{!! $survey->description !!}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
