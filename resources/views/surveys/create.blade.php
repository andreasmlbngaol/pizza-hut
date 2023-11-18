@extends('layouts.main')
@section('main')
<div class="row justify-content-center mt-5">
    <div class="col-sm-4">
        <form method="post" action="/surveys">
        @csrf
        <div class="mb-3">
            <label for="date">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" value="{{ old('date') }}"required>
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rating">Rating</label>
            <input type="number" step="0.01" min="0" max="10" class="form-control @error('rating') is-invalid @enderror" name="rating" id="rating" placeholder="Rating" value="{{ old('rating') }}"required>
            @error('rating')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" type="hidden" name="description" value="{{ old('description') }}">
            <trix-editor input="description"></trix-editor>
            @error('description') 
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        @include('partial.outlet')
@endsection