@extends("layouts.application")

@section("content")

<div id='form-user'>

  @if(isset($file))
    @include($file)
  @endif
</div>

@stop
