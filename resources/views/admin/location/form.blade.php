<div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
    <label for="location_id" class="control-label">{{ 'Location Id' }}</label>
    <input class="form-control" name="location_id" type="number" id="location_id" value="{{ isset($location->location_id) ? $location->location_id : ''}}" >
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($location->name) ? $location->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
