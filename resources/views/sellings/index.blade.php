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
@if ($username !== 'admin')
<a href="/sellings/create" class="btn btn-success my-2">Report Selling</a>
@endif
<table class="table table-bordered text-center table-hover">
    <thead class="table-danger">
        <tr>
            <th>No</th>
            <th>Date</th>
            @if ($username === 'admin')
            <th>Outlet</th>
            @endif
            <th>Delivery</th>
            <th>Dine In</th>
            <th>Cost</th>
            <th>Income</th>
            <th>Surplus</th>
        </tr>
    </thead>
    <tbody>
@foreach ($sellings as $selling)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $selling->date }}</td>
    @if ($username === 'admin')
    <td>{{ $selling->user->name }}</td>
    @endif
    <td>{{ $selling->delivery }}</td>
    <td>{{ $selling->dine_in }}</td>
    <td>Rp.{{ number_format($selling->cost, 0, ',', '.') }}</td>
    <td>Rp.{{ number_format($selling->income, 0, ',', '.') }}</td>
    <td>Rp.{{ number_format($selling->surplus, 0, ',', '.') }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
