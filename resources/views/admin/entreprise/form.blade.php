<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="control-label">{{ 'Logo' }}</label>
    <input class="form-control" name="logo" type="file" id="logo" value="{{ isset($entreprise->logo) ? $entreprise->logo : ''}}" >
    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nom_client') ? 'has-error' : ''}}">
    <label for="nom_client" class="control-label">{{ 'Nom Client' }}</label>
    <input class="form-control" name="nom_client" type="text" id="nom_client" value="{{ isset($entreprise->nom_client) ? $entreprise->nom_client : ''}}" required>
    {!! $errors->first('nom_client', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('localisation') ? 'has-error' : ''}}">
    <label for="localisation" class="control-label">{{ 'Localisation' }}</label>
    <input class="form-control" name="localisation" type="text" id="localisation" value="{{ isset($entreprise->localisation) ? $entreprise->localisation : ''}}" >
    {!! $errors->first('localisation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telephone1') ? 'has-error' : ''}}">
    <label for="telephone1" class="control-label">{{ 'Telephone1' }}</label>
    <input class="form-control" name="telephone1" type="number" id="telephone1" value="{{ isset($entreprise->telephone1) ? $entreprise->telephone1 : ''}}" required>
    {!! $errors->first('telephone1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telephone2') ? 'has-error' : ''}}">
    <label for="telephone2" class="control-label">{{ 'Telephone2' }}</label>
    <input class="form-control" name="telephone2" type="number" id="telephone2" value="{{ isset($entreprise->telephone2) ? $entreprise->telephone2 : ''}}" required>
    {!! $errors->first('telephone2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($entreprise->email) ? $entreprise->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('horaire_ouverture') ? 'has-error' : ''}}">
    <label for="horaire_ouverture" class="control-label">{{ 'Horaire Ouverture' }}</label>
    <input class="form-control" name="horaire_ouverture" type="text" id="horaire_ouverture" value="{{ isset($entreprise->horaire_ouverture) ? $entreprise->horaire_ouverture : ''}}" required>
    {!! $errors->first('horaire_ouverture', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jours_ouverture') ? 'has-error' : ''}}">
    <label for="jours_ouverture" class="control-label">{{ 'Jours Ouverture' }}</label>
    <input class="form-control" name="jours_ouverture" type="text" id="jours_ouverture" value="{{ isset($entreprise->jours_ouverture) ? $entreprise->jours_ouverture : ''}}" required>
    {!! $errors->first('jours_ouverture', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_engin') ? 'has-error' : ''}}">
    <label for="nombre_engin" class="control-label">{{ 'Nombre Engin' }}</label>
    <input class="form-control" name="nombre_engin" type="text" id="nombre_engin" value="{{ isset($entreprise->nombre_engin) ? $entreprise->nombre_engin : ''}}" required>
    {!! $errors->first('nombre_engin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nature_engin') ? 'has-error' : ''}}">
    <label for="nature_engin" class="control-label">{{ 'Nature Engin' }}</label>
    <input class="form-control" name="nature_engin" type="text" id="nature_engin" value="{{ isset($entreprise->nature_engin) ? $entreprise->nature_engin : ''}}" required>
    {!! $errors->first('nature_engin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('responsable') ? 'has-error' : ''}}">
    <label for="responsable" class="control-label">{{ 'Responsable' }}</label>
    <input class="form-control" name="responsable" type="text" id="responsable" value="{{ isset($entreprise->responsable) ? $entreprise->responsable : ''}}" required>
    {!! $errors->first('responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('secteur_activite') ? 'has-error' : ''}}">
    <label for="secteur_activite" class="control-label">{{ 'Secteur Activite' }}</label>
    <input class="form-control" name="secteur_activite" type="text" id="secteur_activite" value="{{ isset($entreprise->secteur_activite) ? $entreprise->secteur_activite : ''}}" required>
    {!! $errors->first('secteur_activite', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sites') ? 'has-error' : ''}}">
    <label for="sites" class="control-label">{{ 'Sites' }}</label>
    <input class="form-control" name="sites" type="text" id="sites" value="{{ isset($entreprise->sites) ? $entreprise->sites : ''}}" required>
    {!! $errors->first('sites', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
