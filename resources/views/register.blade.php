@extends('layout')

@section('title','Regsiter User')

@section('content')
<h3>Add User</h3>
@if(Session::get('register'))
{{Session::get('register')}}
@endif

<div class="col-sm-6">
<form action="/register" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
    <span>@error('name')
      {{$message}}
      @enderror</span>
    </div>
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
