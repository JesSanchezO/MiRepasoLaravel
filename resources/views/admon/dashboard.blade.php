@extends('layouts.master')
@section('title', 'login')
@section('header')
    @parent
    {{$user}}
@stop
@section('navbar')
    @parent
@stop

@section('content')
   <h1>Login Exitoso</h1> 
   
@stop 

@section('footer')
 Derechos reservados Jessica Guadalupe Sánchez Olivas 5E @parent
@stop








