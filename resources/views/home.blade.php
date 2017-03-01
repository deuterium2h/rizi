@extends('layouts.pages.app')

@section('title')
    Home
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-dark">
            <div class="panel-heading">
                <div class="panel-title">Dashboard</div>
                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                </div>
            </div>
            <div class="panel-body">
                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection
