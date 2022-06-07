@extends("layouts.app")
@section("mycontent")


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First name </th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
    </thead>


{{-- @dump($vstudents) --}}
    @foreach($vstudents as $st)
    <tr>
    <td>{{$st["id"]}}</td>
    <td>{{$st["firstname"]}}</td>
    <td>{{$st["lastname"]}}</td>
    <td>{{$st["email"]}}</td>
    <td>{{$st["password"]}}</td>
    <td><a href='{{route("students.show",$st["id"])}}' class="btn btn-info">view</a></td>
    <td><a  href='{{route("students.edit",$st["id"])}}' class="btn btn-warning">edit</a></td>
    <td>
        <form action='{{route("students.destory",$st["id"])}}' method="post">
    @csrf
    @method("delete")
    <input type="submit" class="btn btn-danger" value="delete">
        </form>
    </td>
</tr>

    @endforeach
    

</table>
@endsection