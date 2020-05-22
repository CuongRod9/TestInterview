@extends('master')
@section('content')
<style>
    .divForm{
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
    .divForm h1, form label, .btnCenter button{
      font-weight: bold
    }
    .btnCenter{
      display: flex;
      justify-content: center;
      align-items: center;
    }
</style>
<div class="divForm">
    <h1 style="text-align: center">Content Test</h1>
    <form action="" method="post" style="padding: 20px">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" autofocus>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" class="form-control" placeholder="Enter Content" rows="10"></textarea>
        </div>
        <div class="btnCenter">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection