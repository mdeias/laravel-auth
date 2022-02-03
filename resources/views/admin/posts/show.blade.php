@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>{{$post->title}}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-success">EDIT</a>     
        <a href="" class="btn btn-danger">DELETE</a>     
    </div>
</div>
@endsection