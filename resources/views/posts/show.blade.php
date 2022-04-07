@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Edit Post</h1>
                <a href="{{route('posts')}}" class="btn btn-primary"> All Post</a>

            </div>
        </div>

    </div>
    <div class="row">

        <div class="col">


            <div class="card mb-3 col-6">
                <img src="{{URL:: asset($post->photo) }}" alt="no" class="img-thumbnail" class="card-img-top"  >
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->content}}</p>
                <a href="{{route('posts')}}" class="btn btn-primary"> All Post</a>
                {{-- <p class="card-text"><small class="text-muted">created at: {{$post->created_at->diffForhumans}} </small></p> --}}

                  <p class="card-text"><small class="text-muted">created at: {{$post->created_at->format('d/m/Y')}} </small></p>
                  <p class="card-text"><small class="text-muted">updated at: {{$post->updated_at->format('d/m/Y')}} </small></p>
                    @foreach ($post->tag as $item)
                        <span>{{$item->tag}}</span>
                    @endforeach
                </div>
              </div>

        </div>
    </div>
</div>

@endsection
