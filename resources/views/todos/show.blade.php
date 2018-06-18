@extends('layouts.app')

@section('content')
<a class='btn btn-default'href="/">Go back</a>
<h1>{{$todo->text}}</h1>
@endsection