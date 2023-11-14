@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
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
    <td>{{ $survey->description }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
