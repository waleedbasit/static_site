@extends('layouts.master')

@section('title')
    {{$componet->pageHeading}}
@endsection


    

@section('componet')
<main>
    <section id="content-1-1" class="content-block content-1-1 min-height-600px  bg-white" style="background: url('{{$componet->image}}') center top no-repeat;">
        <div class="container text-center trans-background">
            <h1>{{$componet->pageHeading}}</h1>
            <div class="col-sm-8 col-sm-offset-2">
                <p class="lead">{{$componet->heading}}</p>
            </div>
        </div>
    </section>
    <section class="content-1-5 content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <p class="lead">{{$componet->subtext}}</p>
                    
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection