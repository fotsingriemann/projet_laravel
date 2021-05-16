@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Entreprise {{ $entreprise->id }}</div>
                    <div class="card-body">

                       <a href="{{ url('/admin/entreprise') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/entreprise/' . $entreprise->id . '/edit') }}" title="Edit Entreprise"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/entreprise' . '/' . $entreprise->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Entreprise" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $entreprise->id }}</td>
                                    </tr>
                                    <tr><th> logo </th><td><a href="../../../../storage/app/public/{{$entreprise->logo}}"></a> </td></tr><tr><th> Nom Client </th><td> {{ $entreprise->nom_client }} </td></tr><tr><th> Localisation </th><td> {{ $entreprise->localisation }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
