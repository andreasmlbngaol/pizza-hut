@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center">
    <thead>
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
    <td>{{ $employee->outlet->name }}</td>
    <td>{{ $employee->outlet->area->name }}</td>
    <td>{{ $employee->outlet->area->district->name }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
