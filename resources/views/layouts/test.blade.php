@extends('layouts.apps')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="mb-3 text-center card">
        <div class="card-body"><h5 class="card-title">Info</h5>
            <button type="button" data-type="info" class="btn btn-info btn-show-swal">Show Alert</button>
        </div>
    </div>
    <div class="mb-3 text-center card">
        <div class="card-body"><h5 class="card-title">Warning</h5>
            <button type="button" data-type="warning" class="btn btn-warning btn-show-swal">Show Alert</button>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Select2 Bootstrap 4 Multiple</h5>
            <select multiple="multiple" class="multiselect-dropdown form-control">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                </optgroup>
            </select>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Select2 Bootstrap 4 Single</h5>
            <select class="multiselect-dropdown form-control">
                <option value="AK">Alaska</option>
                <option value="AK">Alfdssaska</option>
                <option value="AK">Alsdsaska</option>
                <option value="AK">Alsdsdaska</option>
                <option value="AK">Alsaska</option>
            </select>
        </div>
    </div>
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
        </table>
    </div>
</div>
@stop