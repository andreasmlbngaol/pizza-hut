@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center table-hover">
    <thead class="table-danger">
        <tr>
            <th>No</th>
            <th>Outlet</th>
            <th>Area</th>
            <th>District</th>
        </tr>
    </thead>
    <tbody>
@foreach ($users as $user)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->area->name }}</td>
    <td>{{ $user->area->district->name }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
