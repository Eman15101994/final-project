@extends("layouts.app")
@section("mycontent")
<div class="card">
  <div class="card-header">
   {{$student_info["firstname"]}} {{$student_info["lastname"]}}
  </div>
  <div class="card-body">
  <h5 class="card-title">Id:{{$student_info["id"]}}</h5>
  <h5 class="card-title">First_name:{{$student_info["firstname"]}}</h5>
  <h5 class="card-title">last_name:{{$student_info["firstname"]}}</h5>
    <h5 class="card-title">EMAIL:{{$student_info["email"]}}</h5>
    <h5 class="card-title">Created_at:{{$student_info["Created_at"]}}</h5>
    <h5 class="card-title">Update_at:{{$student_info["Update_at"]}}</h5>
    <a href="{{route('students.stview')}}" class="btn btn-primary">Go students</a>
  </div>
</div>

@endsection