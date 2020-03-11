@extends('layouts.master')
@section('content')
<div class="register padd-60">
  <div class="container">
   <div class="col-md-6 offset-md-3">
   @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                   </ul>
               </div>
        @endif
   @if(session()->has('message'))
               <div class="alert alert-{{session('type')}}">
                    {{session('message')}}
               </div>
         @endif
   <h1 class="login">LOGIN</h1>
     <form action="{{route('login')}}" method="post">
      @csrf
      <div class="form-group">
        <input name="email" type="text" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <input name="password" type="password" class="form-control" placeholder="">
      </div>
      <button type="submit" class="btn btn-success">Login</button>
     </form>
   </div>
  </div>
</div>
@endsection
