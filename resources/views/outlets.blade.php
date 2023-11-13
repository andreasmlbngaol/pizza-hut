@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Outlet</th>
            <th>Area</th>
            <th>District</th>
        </tr>
    </thead>
    <tbody>
@foreach ($outlets as $outlet)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $outlet->name }}</td>
    <td>{{ $outlet->area->name }}</td>
    <td>{{ $outlet->area->district->name }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
