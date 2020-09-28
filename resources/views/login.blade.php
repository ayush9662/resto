@extends('layout')

@section('title','Login Page')

@section('content')
<div class="col-sm-6">
  @if(Session::get('loginfailed'))
  {{Session::get('loginfailed')}}
  @endif
<form action="/login" method="post">
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{old('email')}}">
      <span>@error('email')
        {{$message}}
        @enderror</span>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Pssword</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{old('password')}}">
        <span>@error('password')
          {{$message}}
          @enderror</span>
        </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@stop
