<div class="form-group {{ $errors->has('engin_name') ? 'has-error' : ''}}">
    <label for="engin_name" class="control-label">{{ 'Engin Name' }}</label>
    <input class="form-control" name="engin_name" type="text" id="engin_name" value="{{ isset($patente->engin_name) ? $patente->engin_name : ''}}" required>
    {!! $errors->first('engin_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('montant') ? 'has-error' : ''}}">
    <label for="montant" class="control-label">{{ 'Montant' }}</label>
    <input class="form-control" name="montant" type="number" id="montant" value="{{ isset($patente->montant) ? $patente->montant : ''}}" required>
    {!! $errors->first('montant', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_debut_val') ? 'has-error' : ''}}">
    <label for="date_debut_val" class="control-label">{{ 'Date Debut Val' }}</label>
    <input class="form-control" name="date_debut_val" type="date" id="date_debut_val" value="{{ isset($patente->date_debut_val) ? $patente->date_debut_val : ''}}" required>
    {!! $errors->first('date_debut_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin_val') ? 'has-error' : ''}}">
    <label for="date_fin_val" class="control-label">{{ 'Date Fin Val' }}</label>
    <input class="form-control" name="date_fin_val" type="date" id="date_fin_val" value="{{ isset($patente->date_fin_val) ? $patente->date_fin_val : ''}}" required>
    {!! $errors->first('date_fin_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('delivrer_par') ? 'has-error' : ''}}">
    <label for="delivrer_par" class="control-label">{{ 'Delivrer Par' }}</label>
    <input class="form-control" name="delivrer_par" type="text" id="delivrer_par" value="{{ isset($patente->delivrer_par) ? $patente->delivrer_par : ''}}" required>
    {!! $errors->first('delivrer_par', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('piece_jointe') ? 'has-error' : ''}}">
    <label for="piece_jointe" class="control-label">{{ 'Piece Jointe' }}</label>
    <input class="form-control" name="piece_jointe" type="file" id="piece_jointe" value="{{ isset($patente->piece_jointe) ? $patente->piece_jointe : ''}}" required>
    {!! $errors->first('piece_jointe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('engin_id') ? 'has-error' : ''}}">
    <label for="engin_id" class="control-label">{{ 'Engin Id' }}</label>
    <input class="form-control" name="engin_id" type="number" id="engin_id" value="{{ isset($patente->engin_id) ? $patente->engin_id : ''}}" required>
    {!! $errors->first('engin_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
