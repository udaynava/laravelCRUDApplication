<div class="form-group">
    <label class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" placeholder="Title"
            value="{{!empty($company->title) ? $company->title : ''}}" required>
    </div>
</div>

<div class='form-group'>
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">{{$submitButton}}</button>
    </div>
</div>