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
<a href="/recipes/create" class="btn btn-success my-2">Add New Recipe</a>
@endif
<table class="table table-bordered text-start table-hover">
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
    <td>{!! $recipe->making !!}</td>
    <td>{!! $recipe->serving !!}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
