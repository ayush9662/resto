@extends('layout')

@section('title','Add')
@section('content')
<h4> Add Restaurent</h4>
@if(Session::get('status'))
{{Session::get('status')}}
@endif
<br>
<div class="col-sm-6">
<form action="/Addresto" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter email" value="{{old('name')}}">
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
        <label for="exampleInputEmail1">Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter email" value="{{old('address')}}">
        <span>@error('address')
          {{$message}}
          @enderror</span>
        </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop
