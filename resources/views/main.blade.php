@extends('layout')

@section('title','Home Page')
<!-- No need to define these sections again if you are extending them-->
@section('header')
@parent
<!--write the code here if any additional-->
@endsection

@section('content')
<h1>{{Session::get('user')}}</h1>
@stop

@section('footer')
@parent
<!--write the code here if any additional-->
@endsection
