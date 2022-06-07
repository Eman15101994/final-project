@extends('layouts.app')
@section('mycontent')

    @dump($users)
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Article</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('articles.store') }}"
          method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Article Title" value="{{ old('title') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Body:</strong>
                    <textarea class="form-control" name="body" placeholder="Article Body">{{ old('body') }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Article Image">
                </div>
            </div>
            {{--  <div class="col-xs-12 col-sm-12 col-md-12">--}} 
      {{--   <div class="form-group">--}} 
               {{--   <strong>Post creator:</strong>--}} 
                   {{--     <select class="form-select"  name="user_id" aria-label="Default select example">--}} 
                    {{--   @foreach($users as $user)--}} 
                        {{--    <option value="{{$user['id']}}">{{$user["name"]}}</option>--}} 
                        {{--    @endforeach--}} 
                            {{--   </select>--}} 
                            {{--    </div>--}} 
                            {{--    </div>--}} 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add Post</button>
            </div>
        </div>
    </form>
@endsection
