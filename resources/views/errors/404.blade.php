@extends('layouts.pages.lgu')

@section('title')
    404 | Page Not Found
@endsection

@section('content')
    <div class="wrap">
        @include('layouts.partials._front-end-header')
        <hr class="no-top-margin">
        <div class="jumbotron">
            <center>
                <h1>404</h1>
                <h2>Page Not Found <br>
                    <small>Please click <a href="/">here</a> to return to home.</small>
                </h2>
            </center>
        </div>
        @include('layouts.partials._front-end-footer')
    </div>
@endsection