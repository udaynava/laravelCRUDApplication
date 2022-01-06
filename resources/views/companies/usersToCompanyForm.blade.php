<div class="form-group">
    <label class="col-sm-4 control-label">Select Users Below or <a href="{{ url('/companies') }}">Go Back</a> </label>
    {{-- <a href="{{ url('/companies') }}" class="btn btn-xs btn-info pull-right">Back</a> --}}
</div>

<div class="users">
    @foreach ($users as $user)
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input class="user" name="setUsers[]" type="checkbox" value="{{$user['user_id']}}" {{(isset($setUsers) && in_array($user['user_id'], $setUsers)) ? "checked" : ""}}>
                        {{ $user['name']}}
                    </label>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class='form-group row'>
    <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn btn-primary">{{ $submitButton }}</button>
    </div>
</div>