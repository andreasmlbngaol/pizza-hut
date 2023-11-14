@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center">
    <thead>
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
    <td>{{ $selling->outlet->name }}</td>
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
