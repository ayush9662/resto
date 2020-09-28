<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurent;
use App\Employee;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Session;

class RestoController extends Controller
{
    function index()
    {
      return view('main');
    }
    function list()
    {
      $data=Restaurent::paginate(5);
      return view('list',['data'=>$data]);
    }
    function add(Request $req)
    {
      $req->validate([
        'name'=>'required',
        'email'=>'required|unique:restaurents,email',
        'address'=>'required',

      ],);
      $submit=new Restaurent;
      $submit->name=$req->input('name');
      $submit->email=$req->input('email');
      $submit->address=$req->input('address');
      $submit->save();

      $req->session()->flash('status','Restaurent is added successfully');
      return redirect('RestoAdd');

    }
    function delete($id)
    {
      Restaurent::find($id)->delete();
      Session::flash('delete','Restaurant data is deleted');
      return redirect('Restolist');

    }
    function edit($id)
    {
      $data=  Restaurent::find($id);
      return view('update',['data'=>$data]);
    }
    function update(Request $req)
    {
  $update=Restaurent::find($req->id);
  $update->name=$req->input('name');
  $update->email=$req->input('email');
  $update->address=$req->input('address');
  $update->save();
  $req->session()->flash('update','Restaurent is updated successfully');
  return redirect('Restolist');
    }
    function register(Request $req)
    {
      $req->validate([
        'name'=>'required',
        'email'=>'required|unique:employees,email',
        'password'=>'required',

      ]);
      $register=new Employee;
      $register->name=$req->input('name');
      $register->email=$req->input('email');
      $register->password=Crypt::encrypt($req->input('password'));
      $register->save();
      $req->session()->flash('register','User added successfully');
      return redirect('/Useradd');
    }
    function login(Request $req)
    {
      $req->validate([
        'email'=>'required',
        'password'=>'required'
      ]);
      $check=Employee::where('email',$req->input('email'))->get();
      $newchcek=count($check);
if($newchcek>0)
{
  if($req->input('password')==Crypt::decrypt($check[0]->password))
  {
  $req->session()->put('user',$check[0]->name) ;
  return redirect('/main');
 }
  else
  {
    $req->session()->flash('loginfailed','Invalid Password');
    return redirect('/login');
  }
}
else
{
  $req->session()->flash('loginfailed','Invalid Email');
  return redirect('/login');
}

    }
    function logout(Request $request)
    {
      $request->session()->forget('user');

// Forget multiple keys...
#$request->session()->forget(['key1', 'key2']);

$request->session()->flush();
return redirect('/login');
    }
}
