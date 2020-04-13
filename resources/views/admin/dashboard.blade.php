@extends('admin.layout')
@section('title','Home')

@section('content')
    <h1>dashboard</h1>
    usuari: {{auth()->user()->name}}
@endsection