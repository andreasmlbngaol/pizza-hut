@extends('layouts.main')
@section('main')
<div class="row justify-content-center mt-5">
    <div class="col-sm-4">
        <form method="post" action="/sellings">
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
            <label for="delivery">Delivery</label>
            <input type="number" min="0" class="form-control @error('delivery') is-invalid @enderror" name="delivery" id="delivery" placeholder="Delivery" value="{{ old('delivery') }}"required>
            @error('delivery')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="dine_in">Dine In</label>
            <input type="number" min="0" class="form-control @error('dine_in') is-invalid @enderror" name="dine_in" id="dine_in" placeholder="Dine In" value="{{ old('dine_in') }}"required>
            @error('dine_in')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cost">Cost</label>
            <input type="number" min="0" class="form-control @error('cost') is-invalid @enderror" name="cost" id="cost" placeholder="Cost" value="{{ old('cost') }}"required>
            @error('cost')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="income">Income</label>
            <input type="number" min="0" class="form-control @error('income') is-invalid @enderror" name="income" id="income" placeholder="Income" value="{{ old('income') }}"required>
            @error('income')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input id="user_id" type="hidden" name="user_id" value="{{ $user_id }}">
        </div>
        <button type="submit" class="btn btn-primary mb-4">Create</button>
        </form>
    </div>
</div>
@endsection