<div class="form-group">
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="Name"
            value="{{!empty($user->name) ? $user->name : ''}}" required>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" placeholder="Email"
            value="{{!empty($user->email) ? $user->email : ''}}" required>
    </div>
</div>

<div class='form-group'>
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">{{$submitButton}}</button>
    </div>
</div>