@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Assurance {{ $assurance->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/assurance') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/assurance/' . $assurance->id . '/edit') }}" title="Edit Assurance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/assurance' . '/' . $assurance->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Assurance" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $assurance->id }}</td>
                                    </tr>
                                    <tr><th> Assureur </th><td> {{ $assurance->assureur }} </td></tr><tr><th> Montant </th><td> {{ $assurance->montant }} </td></tr><tr><th> Immatriculation </th><td> {{ $assurance->immatriculation }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
