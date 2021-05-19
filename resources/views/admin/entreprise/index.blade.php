@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Entreprise</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/entreprise/create') }}" class="btn btn-success btn-sm" title="Add New Entreprise">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/entreprise') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table style="width: 100%;" id="example" classz="table table-hover table-striped table-bordered">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        {{-- <th>Logo</th> --}}
                                        <th>Nom Client</th>
                                        <th>Localisation</th>
                                        <th>Responsable</th>
                                        <th>Activité</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entreprise as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{ $item->logo }}</td> --}}
                                        <td>{{ $item->nom_client }}</td>
                                        <td>{{ $item->localisation }}</td>
                                        <td>{{$item->responsable}}</td>
                                        <td>{{$item->secteur_activite}}</td>
                                        <td>
                                            <a href="{{ url('/admin/entreprise/' . $item->id) }}" title="View Entreprise"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/entreprise/' . $item->id . '/edit') }}" title="Edit Entreprise"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/entreprise' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Entreprise" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $entreprise->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
