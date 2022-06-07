
@extends('layouts.app')
@section('mycontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Article crud</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{--   @dump($articles) --}} 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Body</th>
            <th>Creator</th>
            <th>Actions</th>
        </tr>
        @foreach ($articles as $artic)
    {{--      @dump($artic->user->name) --}} 
            <tr>
                <td>{{ $artic->id }}</td>
                <td><img src="/uploads/images/{{$artic->image }}" width="100px"></td>
                <td>{{ $artic->title }}</td>
                <td>{{ substr($artic->body,0,200) }}</td>
                <td>{{ $artic->user->name }}</td>
               {{--  <td><a href="{{route('user.articles',$artic->user->id)}}">{{$artic->user->name }} </a> </td>--}}
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('articles.show',$artic->id) }}">Show</a>
                    <a class="btn btn-sm btn-primary" href="{{ route('articles.edit',$artic->id) }}">Edit</a>
                    <form action="{{ route('articles.destroy',$artic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
<a href="{{route('articles.index')}}" class="btn btn-primary"> Back to ALL</a>
@endsection