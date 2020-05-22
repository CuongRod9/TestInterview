@extends('master')
@section('content')
<style>
    div.divForm{
        display: inline-block;
        position: fixed;
        top: 20%;
        left: 0;
        right: 0;
        width: 30%;
        margin: auto;
        border: 1px solid grey;
        background: linear-gradient(130deg,rgba(34,193,195,.367682107),#e6a919 81%);
    }
</style>
<div class="divForm">
    <h1 style="text-align: center">Content Test</h1>
    <form action="" method="post" style="padding: 20px">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <textarea name="" id=""  class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection