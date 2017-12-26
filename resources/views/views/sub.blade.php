<?php $name ="<b>Lê Tiến Tài</b>";?>

@extends('views.master')
@section('sidebar')
    <h4>This is my sub</h4>
    @parent
@stop
@section('content')
    This is my sub
    {{$name}}
    {!! $name !!}
@stop


