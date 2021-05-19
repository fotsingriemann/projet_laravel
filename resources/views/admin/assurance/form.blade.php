<div class="form-group {{ $errors->has('assureur') ? 'has-error' : ''}}">
    <label for="assureur" class="control-label">{{ 'Assureur' }}</label>
    <input class="form-control" name="assureur" type="text" id="assureur" value="{{ isset($assurance->assureur) ? $assurance->assureur : ''}}" >
    {!! $errors->first('assureur', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('montant') ? 'has-error' : ''}}">
    <label for="montant" class="control-label">{{ 'Montant' }}</label>
    <input class="form-control" name="montant" type="number" id="montant" value="{{ isset($assurance->montant) ? $assurance->montant : ''}}" required>
    {!! $errors->first('montant', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('immatriculation') ? 'has-error' : ''}}">
    <label for="immatriculation" class="control-label">{{ 'Immatriculation' }}</label>
    <input class="form-control" name="immatriculation" type="text" id="immatriculation" value="{{ isset($assurance->immatriculation) ? $assurance->immatriculation : ''}}" required>
    {!! $errors->first('immatriculation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_debut_val') ? 'has-error' : ''}}">
    <label for="date_debut_val" class="control-label">{{ 'Date Debut Val' }}</label>
    <input class="form-control" name="date_debut_val" type="date" id="date_debut_val" value="{{ isset($assurance->date_debut_val) ? $assurance->date_debut_val : ''}}" required>
    {!! $errors->first('date_debut_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_fin_val') ? 'has-error' : ''}}">
    <label for="date_fin_val" class="control-label">{{ 'Date Fin Val' }}</label>
    <input class="form-control" name="date_fin_val" type="date" id="date_fin_val" value="{{ isset($assurance->date_fin_val) ? $assurance->date_fin_val : ''}}" required>
    {!! $errors->first('date_fin_val', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('piece_jointe') ? 'has-error' : ''}}">
    <label for="piece_jointe" class="control-label">{{ 'Piece Jointe' }}</label>
    <input class="form-control" name="piece_jointe" type="file" id="piece_jointe" value="{{ isset($assurance->piece_jointe) ? $assurance->piece_jointe : ''}}" required>
    {!! $errors->first('piece_jointe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('engin_id') ? 'has-error' : ''}}">
    <label for="engin_id" class="control-label">{{ 'Engin Id' }}</label>
    <select class="form-control" name="engin_id" type="number" id="engin_id" value="{{ isset($assurance->engin_id) ? $assurance->engin_id : ''}}" required>

        @foreach($engins as $enginT)
            <option value="{{$enginT->id}}" @if(isset($assurance) && $enginT->id == $engin->engin_id) selected @endif>{{$enginT->immatriculation}}</option>      
        @endforeach
        </select>
  
  
    {!! $errors->first('assurance_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
