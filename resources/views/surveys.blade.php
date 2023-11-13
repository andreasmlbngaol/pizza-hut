@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Outlet</th>
            <th>Rating</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
@foreach ($surveys as $survey)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $survey->date }}</td>
    <td>{{ $survey->outlet->name }}</td>
    <td>{{ $survey->rating }}</td>
    <td>{{ $survey->description }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
