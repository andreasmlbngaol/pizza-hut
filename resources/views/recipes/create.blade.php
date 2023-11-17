@extends('layouts.main')

@section('main')
<div class="row justify-content-center mt-5">
    <div class="col-sm-6">
        <form method="post" action="/recipes">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}"required autofocus>
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="making" class="form-label">Way of Making</label>
            <input id="making" type="hidden" name="making" value="{{ old('making') }}">
            <trix-editor input="making"></trix-editor>
            @error('making') 
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="serving" class="form-label">Way of Serving</label>
            <input id="serving" type="hidden" name="serving" value="{{ old('serving') }}">
            <trix-editor input="serving"></trix-editor>
            @error('serving') 
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4">Create</button>
        </form>
    </div>
</div>

@endsection