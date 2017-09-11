@extends('layouts.master')

@section('title')
    	BBNYC-About
@endsection
@section('heading')
    {{$about->heading}}
@endsection

@section('head')
<section class="hero">
    <div class="container">
        <div class="brand">
            
        </div>
        
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="editContent">
                <h1>@yield('heading')</h1>
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <p class="lead">{{$about->subtext}}</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('componet')



    
@endsection

