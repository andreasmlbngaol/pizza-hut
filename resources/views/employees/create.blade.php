@extends('layouts.main')
@section('main')
<div class="row justify-content-center mt-5">
    <div class="col-sm-4">
        <form method="post" action="/dashboard/posts">
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
            <label for="position" class="visually-hidden">Position</label>
            <select class="form-select @error('position_id') is-invalid @enderror" id="position" name="position_id" required>
                <option selected>Position</option>
                @foreach ($positions as $position)
                    @if(old('position_id') == $position->id)
                    <option value="{{ $position->id }}" selected>{{ $position->name }}</option>
                    @else
                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('position_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4">Create</button>
        </form>
    </div>
</div>
@endsection
