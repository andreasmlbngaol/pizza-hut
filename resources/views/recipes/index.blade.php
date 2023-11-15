@extends('layouts.main')

@section('main')

<div class="col-lg-8 mt-3 mx-auto">
<table class="table table-bordered text-center table-hover">
    <thead class="table-danger">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Way of Making</th>
            <th>Way of Serving</th>
        </tr>
    </thead>
    <tbody>
@foreach ($recipes as $recipe)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $recipe->name }}</td>
    <td>{{ $recipe->making }}</td>
    <td>{{ $recipe->serving }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
