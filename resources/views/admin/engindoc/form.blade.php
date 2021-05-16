<div class="form-group {{ $errors->has('visite_technique') ? 'has-error' : ''}}">
    <label for="visite_technique" class="control-label">{{ 'Visite Technique' }}</label>
    <input class="form-control" name="visite_technique" type="file" id="visite_technique" value="{{ isset($engindoc->visite_technique) ? $engindoc->visite_technique : ''}}" required>
    {!! $errors->first('visite_technique', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('engin') ? 'has-error' : ''}}">
    <label for="engin" class="control-label">{{ 'Engin' }}</label>
    <input class="form-control" name="engin" type="text" id="engin" value="{{ isset($engindoc->engin) ? $engindoc->engin : ''}}" required>
    {!! $errors->first('engin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('immatriculation') ? 'has-error' : ''}}">
    <label for="immatriculation" class="control-label">{{ 'Immatriculation' }}</label>
    <input class="form-control" name="immatriculation" type="text" id="immatriculation" value="{{ isset($engindoc->immatriculation) ? $engindoc->immatriculation : ''}}" required>
    {!! $errors->first('immatriculation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_debut_val') ? 'has-error' : ''}}">
    <label for="date_debut_val" class="control-label">{{ 'Date Debut Val' }}</label>
    <input class="form-control" name="date_debut_val" type="date" id="date_debut_val" value="{{ isset($engindoc->date_debut_val) ? $engindoc->date_debut_val : ''}}" required>
    {!! $errors->first('date_debut_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin_val') ? 'has-error' : ''}}">
    <label for="date_fin_val" class="control-label">{{ 'Date Fin Val' }}</label>
    <input class="form-control" name="date_fin_val" type="date" id="date_fin_val" value="{{ isset($engindoc->date_fin_val) ? $engindoc->date_fin_val : ''}}" required>
    {!! $errors->first('date_fin_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('effectuer_par') ? 'has-error' : ''}}">
    <label for="effectuer_par" class="control-label">{{ 'Effectuer Par' }}</label>
    <input class="form-control" name="effectuer_par" type="text" id="effectuer_par" value="{{ isset($engindoc->effectuer_par) ? $engindoc->effectuer_par : ''}}" required>
    {!! $errors->first('effectuer_par', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('piece_jointe') ? 'has-error' : ''}}">
    <label for="piece_jointe" class="control-label">{{ 'Piece Jointe' }}</label>
    <input class="form-control" name="piece_jointe" type="file" id="piece_jointe" value="{{ isset($engindoc->piece_jointe) ? $engindoc->piece_jointe : ''}}" >
    {!! $errors->first('piece_jointe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('engin_id') ? 'has-error' : ''}}">
    <label for="engin_id" class="control-label">{{ 'Engin Id' }}</label>
    <input class="form-control" name="engin_id" type="number" id="engin_id" value="{{ isset($engindoc->engin_id) ? $engindoc->engin_id : ''}}" required>
    {!! $errors->first('engin_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
