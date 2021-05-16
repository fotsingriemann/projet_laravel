<div class="form-group {{ $errors->has('type_engin') ? 'has-error' : ''}}">
    <label for="type_engin" class="control-label">{{ 'Type Engin' }}</label>
    <input class="form-control" name="type_engin" type="text" id="type_engin" value="{{ isset($engin->type_engin) ? $engin->type_engin : ''}}" required>
    {!! $errors->first('type_engin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('immatriculation') ? 'has-error' : ''}}">
    <label for="immatriculation" class="control-label">{{ 'Immatriculation' }}</label>
    <input class="form-control" name="immatriculation" type="text" id="immatriculation" value="{{ isset($engin->immatriculation) ? $engin->immatriculation : ''}}" required>
    {!! $errors->first('immatriculation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marque_serie') ? 'has-error' : ''}}">
    <label for="marque_serie" class="control-label">{{ 'Marque Serie' }}</label>
    <input class="form-control" name="marque_serie" type="text" id="marque_serie" value="{{ isset($engin->marque_serie) ? $engin->marque_serie : ''}}" required>
    {!! $errors->first('marque_serie', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modele') ? 'has-error' : ''}}">
    <label for="modele" class="control-label">{{ 'Modele' }}</label>
    <input class="form-control" name="modele" type="text" id="modele" value="{{ isset($engin->modele) ? $engin->modele : ''}}" required>
    {!! $errors->first('modele', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_chassis') ? 'has-error' : ''}}">
    <label for="numero_chassis" class="control-label">{{ 'Numero Chassis' }}</label>
    <input class="form-control" name="numero_chassis" type="text" id="numero_chassis" value="{{ isset($engin->numero_chassis) ? $engin->numero_chassis : ''}}" required>
    {!! $errors->first('numero_chassis', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_de_mise_en_circulation') ? 'has-error' : ''}}">
    <label for="date_de_mise_en_circulation" class="control-label">{{ 'Date De Mise En Circulation' }}</label>
    <input class="form-control" name="date_de_mise_en_circulation" type="text" id="date_de_mise_en_circulation" value="{{ isset($engin->date_de_mise_en_circulation) ? $engin->date_de_mise_en_circulation : ''}}" required>
    {!! $errors->first('date_de_mise_en_circulation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('carburant') ? 'has-error' : ''}}">
    <label for="carburant" class="control-label">{{ 'Carburant' }}</label>
    <input class="form-control" name="carburant" type="text" id="carburant" value="{{ isset($engin->carburant) ? $engin->carburant : ''}}" required>
    {!! $errors->first('carburant', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('couleur') ? 'has-error' : ''}}">
    <label for="couleur" class="control-label">{{ 'Couleur' }}</label>
    <input class="form-control" name="couleur" type="text" id="couleur" value="{{ isset($engin->couleur) ? $engin->couleur : ''}}" required>
    {!! $errors->first('couleur', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conduit_par') ? 'has-error' : ''}}">
    <label for="conduit_par" class="control-label">{{ 'Conduit Par' }}</label>
    <input class="form-control" name="conduit_par" type="text" id="conduit_par" value="{{ isset($engin->conduit_par) ? $engin->conduit_par : ''}}" required>
    {!! $errors->first('conduit_par', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Image') ? 'has-error' : ''}}">
    <label for="Image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="Image" type="file" id="Image" value="{{ isset($engin->Image) ? $engin->Image : ''}}" required>
    {!! $errors->first('Image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entreprise_id') ? 'has-error' : ''}}">
    <label for="entreprise_id" class="control-label">{{ 'Entreprise Id' }}</label>
    <input class="form-control" name="entreprise_id" type="number" id="entreprise_id" value="{{ isset($engin->entreprise_id) ? $engin->entreprise_id : ''}}" required>
    {!! $errors->first('entreprise_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
