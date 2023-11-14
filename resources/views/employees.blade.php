@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center table-hover">
    <thead class="table-danger">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Outlet</th>
            <th>Area</th>
            <th>District</th>
        </tr>
    </thead>
    <tbody>
@foreach ($employees as $employee)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $employee->name }}</td>
    <td>{{ $employee->position->name }}</td>
    <td>{{ $employee->user->name }}</td>
    <td>{{ $employee->user->area->name }}</td>
    <td>{{ $employee->user->area->district->name }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
