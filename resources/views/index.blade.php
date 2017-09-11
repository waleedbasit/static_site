@extends('layouts.master')

@section('title')
	@if($main->heading!='Enter Your Mission Statement Here')
    	{{$main->heading}}
    @else
    	BBNYC
    @endif
@endsection
@section('heading')
    {{$main->heading}}
@endsection

@section('head')
<section class="hero">
    <div class="container">
        <div class="brand">
            
        </div>
        
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="editContent">
                <h1>@yield('heading')</h1>
            </div>
        </div>
    </div>
</section>
@endsection
@section('about')
    @include('layouts.about')
@endsection



@section('componet')


@foreach($main->componets as $componet)
	@if ($componet->id % 2 == 0)
          @include('componet1')
    @else
    	@include('componet')
    @endif

 @endforeach
    
@endsection

