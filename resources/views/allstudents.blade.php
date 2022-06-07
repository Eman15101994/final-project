@extends("layouts.app")
@section("mycontent")
<h1 style="color:rgba(57, 41, 146, 0.658)">LIST OF MY STUDENTS:</h1>
@foreach($students as $stu)
<li style="color:rgba(57, 41, 146"> {{$stu}}</li>
@endforeach
@endsection