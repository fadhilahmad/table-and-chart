@extends('layouts.app')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<style>
    #baru{
        text-align: center;
    }
</style>
<div class="container">
<!--    <div class="row">
        <div class="col-md-8 col-md-offset-2">-->
            <div class="panel panel-default">
                <div class="panel-heading">CONTENT</div>

                <div class="panel-body">
                    <br><br>
                    <h2>NOVEMBER 2017</h2> <BR>
                    <a href="{{ route('novWeek1') }}">WEEK 1</a><br>
                    <a href="{{ route('novWeek2') }}">WEEK 2</a><BR>
                    <a href="{{ route('novWeek3') }}">WEEK 3</a><bR>
                    <a href="{{ route('novWeek4') }}">WEEK 4</a><BR>
                    <br><br>
                    <h2>DECEMBER 2017</h2> <BR>
                    <a href="{{ route('decWeek1') }}">WEEK 1</a><br>
                    <a href="{{ route('decWeek2') }}">WEEK 2</a><BR>
                    <a href="{{ route('decWeek3') }}">WEEK 3</a><bR>
                    <a href="{{ route('decWeek4') }}">WEEK 4</a><BR>
                    <br><br>
                    <h2>JANUARY 2018</h2> <BR>
                    <a href="{{ route('janWeek1') }}">WEEK 1</a><br>
                    <a href="{{ route('janWeek2') }}">WEEK 2</a><BR>
                    <a href="{{ route('janWeek3') }}">WEEK 3</a><bR>
                    <a href="{{ route('janWeek4') }}">WEEK 4</a><BR>
                    <br><br>
                </div>
            </div>
<!--        </div>
    </div>-->
</div>
<script src="{{ asset('js/bootrap.min.js') }}"></script>
@endsection
