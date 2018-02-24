@extends('layouts.app')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<style>
    #baru{
        text-align: center;
    }
</style>
<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">WEEK 1</div>

                <div class="panel-body">
                    <br><br>
                    <table class="table table-bordered" id="baru">
                        <tr class="thead-dark">
                            <th class="bg-primary text-center" rowspan="3">Assignee Login</th>
                            <th class="bg-primary text-center" rowspan="3">Total Incident Colsure</th>
                            <th class="bg-primary text-center" rowspan="3">Total Working day for Incident</th>
                            <th class="bg-success text-center" colspan="6">Incident Priority</th>
                        </tr>
                        <tr>
                            <th class="bg-info text-center" colspan="2">Low</th>
                            <th class="bg-info text-center" colspan="2">Medium</th>
                            <th class="bg-info text-center" colspan="2">High</th>
                        </tr>
                        <tr>
                             <th class="bg-info text-center">Incident Closure Original</th>
                             <th class="bg-info text-center">Duplicate</th>
                             <th class="bg-info text-center">Incident Closure Original</th>
                             <th class="bg-info text-center">Duplicate</th>
                             <th class="bg-info text-center">Incident Closure Original</th>
                             <th class="bg-info text-center">Duplicate</th>
                        </tr>
                        <tr>
                             <td>Service SCO</td>
                             <td></td>
                             <td>7</td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>                        
                             </tr>
                        <tr>
                            <td>Alex,Ng</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Eric Kor</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    
                    <br><br>
                </div>
            </div>           
</div>

<script src="{{ asset('js/bootrap.min.js') }}"></script>
@endsection
