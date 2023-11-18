<div class="mb-3">
    <label for="district" id="district_label">District</label>
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
<div class="mb-3" id="area_div">
    <label for="area" id="area_label">Area</label>
    <select class="form-select @error('area_id') is-invalid @enderror" id="area" name="area_id" required>
        <option value="" selected>Area</option>
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
<div class="mb-3" id="user_div">
    <label for="user" id="user_label">Outlet</label>
    <select class="form-select @error('user_id') is-invalid @enderror" id="user" name="user_id" required>
        <option value="" selected>Outlet</option>
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
</div>

<script>
    area_hidden = '';
    user_hidden = '';   
    $('.area-option').hide();
    $('.user-option').hide();
    $('#position_label').hide();
    $('#district_label').hide();
    $('#area_label').hide();
    $('#user_label').hide();
    
    $('#position').change(function() {
    $('#position_label').show();
    });
    $('#district').change(function() {
    $('#district_label').show();
    if($('#area').val() != 0) {
        $('#area').val("").change();
    }
    if($('#user').val() != 0) {
        $('#user').val("").change();
    }
    area_id = '.area-' + this.value;
    $(area_id).show();
    $(area_hidden).hide();
    area_hidden = area_id;
    });
    $('#area').change(function() {
    $('#area_label').show();
    if($('#user').val() != 0) {
        $('#user').val("").change();
    }
    user_id = '.user-' + this.value;
    $(user_id).show();
    $(user_hidden).hide();
    user_hidden = user_id;
    });
    $('#user').change(function() {
    $('#user_label').show();
    });
</script>