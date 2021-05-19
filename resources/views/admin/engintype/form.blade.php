<div class="form-group {{ $errors->has('Type_engin') ? 'has-error' : ''}}">
    <label for="Type_engin" class="control-label">{{ 'Type Engin' }}</label>
    <input class="form-control" name="Type_engin" type="text" id="Type_engin" value="{{ isset($engintype->Type_engin) ? $engintype->Type_engin : ''}}" required>
    {!! $errors->first('Type_engin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Description') ? 'has-error' : ''}}">
    <label for="Description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="Description" type="textarea" id="Description" >{{ isset($engintype->Description) ? $engintype->Description : ''}}</textarea>
    {!! $errors->first('Description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
