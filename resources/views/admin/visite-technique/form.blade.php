<div class="form-group {{ $errors->has('engin_name') ? 'has-error' : ''}}">
    <label for="engin_name" class="control-label">{{ 'Engin Name' }}</label>
    <input class="form-control" name="engin_name" type="text" id="engin_name" value="{{ isset($visitetechnique->engin_name) ? $visitetechnique->engin_name : ''}}" >
    {!! $errors->first('engin_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('montant') ? 'has-error' : ''}}">
    <label for="montant" class="control-label">{{ 'Montant' }}</label>
    <input class="form-control" name="montant" type="number" id="montant" value="{{ isset($visitetechnique->montant) ? $visitetechnique->montant : ''}}" required>
    {!! $errors->first('montant', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_debut_val') ? 'has-error' : ''}}">
    <label for="date_debut_val" class="control-label">{{ 'Date Debut Val' }}</label>
    <input class="form-control" name="date_debut_val" type="date" id="date_debut_val" value="{{ isset($visitetechnique->date_debut_val) ? $visitetechnique->date_debut_val : ''}}" required>
    {!! $errors->first('date_debut_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin_val') ? 'has-error' : ''}}">
    <label for="date_fin_val" class="control-label">{{ 'Date Fin Val' }}</label>
    <input class="form-control" name="date_fin_val" type="date" id="date_fin_val" value="{{ isset($visitetechnique->date_fin_val) ? $visitetechnique->date_fin_val : ''}}" required>
    {!! $errors->first('date_fin_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('effectuer_par') ? 'has-error' : ''}}">
    <label for="effectuer_par" class="control-label">{{ 'Effectuer Par' }}</label>
    <input class="form-control" name="effectuer_par" type="text" id="effectuer_par" value="{{ isset($visitetechnique->effectuer_par) ? $visitetechnique->effectuer_par : ''}}" required>
    {!! $errors->first('effectuer_par', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('piece_jointe') ? 'has-error' : ''}}">
    <label for="piece_jointe" class="control-label">{{ 'Piece Jointe' }}</label>
    <input class="form-control" name="piece_jointe" type="file" id="piece_jointe" value="{{ isset($visitetechnique->piece_jointe) ? $visitetechnique->piece_jointe : ''}}" >
    {!! $errors->first('piece_jointe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('engin_id') ? 'has-error' : ''}}">
    <label for="engin_id" class="control-label">{{ 'Engin Id' }}</label>
    <input class="form-control" name="engin_id" type="number" id="engin_id" value="{{ isset($visitetechnique->engin_id) ? $visitetechnique->engin_id : ''}}" required>
    {!! $errors->first('engin_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
