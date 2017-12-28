@extends('views.master')
@section('sidebar')
    @parent
    <h3>This is layout</h3>
@stop
@section('content')
    @for($i = 0; $i <10; $i++)
        Số thứ tự: {{$i}} <br>
    @endfor
   <?php $i=1; ?>
    @while($i<=9)
        Số thứ tự while : {{$i}} <br>
       <?php $i++;?>
    @endwhile
@stop