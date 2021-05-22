@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
         

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Visite Technique {{ $visitetechnique->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/visite-technique') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/visite-technique/' . $visitetechnique->id . '/edit') }}" title="Edit VisiteTechnique"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/visitetechnique' . '/' . $visitetechnique->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete VisiteTechnique" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $visitetechnique->id }}</td>
                                    </tr>
                                    <tr><th> Engin Name </th><td> {{ $visitetechnique->engin_name }} </td></tr><tr><th> Montant </th><td> {{ $visitetechnique->montant }} </td></tr><tr><th> Date Debut Validation </th><td> {{ $visitetechnique->date_debut_val }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
