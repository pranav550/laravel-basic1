@extends('layout.main')


@section('title', 'Student List')


@section('sidebar')
@parent
<p>this is second sidebar</p>
@endsection

@if(Session::has('user_id'))
<h1>User Id is :- {{Session('user_id')}}</h1>
@endif

@if(Session::has('message'))
<div class="{{session('message')['class']}}">User message is :- {{session('message')['msg']}}</div>
@endif


@section('content')

<h1>This is student list page</h1>
@endsection