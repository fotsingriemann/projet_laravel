@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Engin {{ $engin->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/engin') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/engin/' . $engin->id . '/edit') }}" title="Edit Engin"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/engin' . '/' . $engin->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Engin" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $engin->id }}</td>
                                    </tr>
                                    <tr><th> Type Engin </th><td> {{ $engin->type_engin }} </td></tr><tr><th> Immatriculation </th><td> {{ $engin->immatriculation }} </td></tr><tr><th> Marque Serie </th><td> {{ $engin->marque_serie }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
