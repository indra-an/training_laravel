@extends("layouts.application")
@section("content")


  @if (Session::has('notice'))
    <div class="alert alert-info">{{Session::get('notice')}}</div>
  @endif
  
  @if (Session::has('error')) 
    <div class="alert alert-danger">{{Session::get('error')}} {{$errors->first('title')}} 
        {{$errors->first('content')}} 
        {{$errors->first('author')}}
        </div>       
  @endif
        
<div id="list-article">

    @if(isset($file))
      @include($file)
    @endif

  </div>
  
@stop