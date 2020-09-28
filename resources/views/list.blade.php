@extends('layout')

@section('title','List')

@section('content')
<br>
<h4> Restaurant List</h4>
<br>
@if(Session::get('delete'))
{{Session::get('delete')}}
@elseif(Session::get('update'))
{{Session::get('update')}}
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
        <th scope="col">Edit</th>
          <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php $n=1;?>
@foreach($data as $item)

    <tr>
      <th scope="row">{{$n++}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td><a href="Restoedit/{{$item->id}}">Edit</a></td>
            <td><a href="Restodelete/{{$item->id}}">Delete</a></td>
    </tr>
@endforeach

</tbody>
</table>
{{$data->links()}}
@stop
