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
            <label for="position" class="visually-hidden" id="position_label">Position</label>
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
        <div class="mb-3">
            <label for="district" class="visually-hidden" id="district_label">District</label>
            <select class="form-select @error('district_id') is-invalid @enderror" id="district" name="district_id" required>
                <option selected>District</option>
                @foreach ($districts as $district)
                @if ($district->name !== 'Admin') 
                    @if(old('district_id') == $district->id)
                    <option value="{{ $district->id }}" selected>{{ $district->name }}</option>
                    @else
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                    @endif
                @endif
                @endforeach
            </select>
            @error('district_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 visually-hidden" id="area_div">
            <label for="area" class="visually-hidden" id="area_label">Area</label>
            <select class="form-select @error('area_id') is-invalid @enderror" id="area" name="area_id" required>
                <option value="0" selected>Area</option>
                @foreach ($areas as $area)
                @if ($area->name !== 'Admin') 
                    @if(old('area_id') == $area->id)
                    <option value="{{ $area->id }}" class="area-option area-{{ $area->district_id }}" selected>{{ $area->name }}</option>
                    @else
                    <option value="{{ $area->id }}" class="area-option area-{{ $area->district_id }}">{{ $area->name }}</option>
                    @endif
                @endif
                @endforeach
            </select>
            @error('area_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 visually-hidden" id="user_div">
            <label for="user" class="visually-hidden" id="user_label">Outlet</label>
            <select class="form-select @error('user_id') is-invalid @enderror" id="user" name="user_id" required>
                <option value="0" selected>Outlet</option>
                @foreach ($users as $user)
                    @if(old('user_id') == $user->id)
                    <option value="{{ $user->id }}" class="user-option user-{{ $user->area_id }}" selected>{{ $user->name }}</option>
                    @else
                    <option value="{{ $user->id }}" class="user-option user-{{ $user->area_id }}">{{ $user->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('user_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4">Create</button>
        </form>
    </div>
</div>

<script>
    area_hidden = '';
    user_hidden = '';
    $('.area-option').hide();
    $('.user-option').hide();
    $('#position').change(function() {
        $('#position_label').removeClass("visually-hidden");
    });
    $('#district').change(function() {
        $('#district_label').removeClass("visually-hidden");
        $('#area_div').removeClass("visually-hidden");
        area_value = $('#area').val();
        if(area_value != 0) {
            $('#area').val("0").change();
        }
        user_value = $('#user').val();
        if(user_value != 0) {
            $('#user').val("0").change();
        }
        area_id = '.area-' + this.value;
        $(area_id).show();
        $(area_hidden).hide();
        area_hidden = area_id;
    });
    $('#area').change(function() {
        $('#area_label').removeClass("visually-hidden");
        $('#user_div').removeClass("visually-hidden");
        $('#user').val("0").change();
        user_value = $('#user').val();
        if(user_value != 0) {
            $('#user').val("0").change();
        }
        user_id = '.user-' + this.value;
        $(user_id).show();
        $(user_hidden).hide();
        user_hidden = user_id;
    });
    $('#user').change(function() {
        $('#user_label').removeClass("visually-hidden");
    });
</script>
@endsection