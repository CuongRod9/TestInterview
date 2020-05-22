@extends('master')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="{!! url('array') !!}">Array Comparison</a>
            <a href="{!! url('string') !!}">Normalize</a>
            <a href="{!! url('randomArray') !!}">Random Array</a>
            <a href="{!! url('webSecurity') !!}">Web Security</a>
        </div>
    </div>
</div>
@endsection
