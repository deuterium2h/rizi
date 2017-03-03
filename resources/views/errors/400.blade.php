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
                <h1>400</h1>
                <h2>Captcha Not Answered</h2>
            </center>
        </div>
        @include('layouts.partials._front-end-footer')
    </div>
@endsection