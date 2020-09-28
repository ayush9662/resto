@extends('layout')

@section('title','Update')
@section('content')
<h4>Edit Restaurent</h4>
<br>
<div class="col-sm-6">
<form action="UpdateResto" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter email" value="{{$data->name}}">
    <span>@error('name')
      {{$message}}
      @enderror</span>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{$data->email}}">
      <span>@error('email')
        {{$message}}
        @enderror</span>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter email" value="{{$data->address}}">
        <span>@error('address')
          {{$message}}
          @enderror</span>
        </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop
