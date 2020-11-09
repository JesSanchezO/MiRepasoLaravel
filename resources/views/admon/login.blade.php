@extends('layouts.master')
@section('title', 'login')
@section('header')
    @parent
@stop
@section('navbar')
    @parent
@stop

@section('content')
    <form action="{{action('PruebaController@validarLogin')}}" method="post" >
        {{csrf_field()}}
         <label for ="user">Usuario</label>
         <input type="text" name="user">
         <br>
         <label for="password">Password</label>
         <input type="password" name="password">
         <br>
         <label for="key">Key</label>
         <input type="text" name="key">
         <br>
         <input type="submit" value="submit">
    </form>
@stop 

@section('footer')
 Derechos reservados Jessica Guadalupe Sánchez Olivas 5E @parent
@stop








