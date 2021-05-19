@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Entreprise {{ $entreprise->nom_client }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/entreprise') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>

                        <a href="{{ url('/admin/entreprise/' . $entreprise->id . '/edit') }}" title="Edit Entreprise"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                        <form method="POST" action="{{ url('admin/entreprise' . '/' . $entreprise->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Entreprise" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    {{-- <tr>
                                        <th>ID</th><td>{{ $entreprise->id }}</td>
                                    </tr> --}}
                                    <tr>
                                        <th> Logo </th>
                                        <td>
                                            <a href="{{url('storage/'.$entreprise->logo)}}"><img src="{{url('storage/'.$entreprise->logo)}}" width="90" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Nom Client </th>
                                        <td> {{ $entreprise->nom_client }} </td>
                                    </tr>
                                    <tr>
                                        <th> Localisation </th>
                                        <td> {{ $entreprise->localisation }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $entreprise->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jours d'ouverture </th>
                                        <td> {{ $entreprise->jours_ouverture }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre engins </th>
                                        <td> {{ $entreprise->nombre_engin }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nature des engins </th>
                                        <td> {{ $entreprise->nature_engin }} </td>
                                    </tr>
                                    <tr>
                                        <th> Secteur d'activité </th>
                                        <td> {{ $entreprise->secteur_activite }} </td>
                                    </tr>
                                    <tr>
                                        <th> Localisation </th>
                                        <td> {{ $entreprise->localisation }} </td>
                                    </tr>
                                    <tr>
                                        <th> Responsable </th>
                                        <td> {{ $entreprise->responsable }} </td>
                                    </tr>
                                    <tr>
                                        <th> Téléphone 1 </th>
                                        <td> {{ $entreprise->telephone1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Téléphone 2 </th>
                                        <td> {{ $entreprise->telephone2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Horaire ouverture </th>
                                        <td> {{ $entreprise->horaire_ouverture }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
