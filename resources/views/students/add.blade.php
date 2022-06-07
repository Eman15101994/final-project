@extends("layouts.app")
@section("mycontent")

<div>

</div>
<form  action="/savestudent" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>first_name</label>
            <input type="text" name="firstname"><br/><br>
        </div>
        @error("firstname")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label>last name</label>
            <input type="text" name="lastname"><br/><br>
            </div>
            @error("lastname")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email"><br/><br>
            </div>
            @error("email")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password"><br/><br>
            </div>
            @error("password")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
            <input type="submit" value="submit">
                <input type="reset">
       
</form>
@endsection