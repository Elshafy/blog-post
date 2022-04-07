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
        @if (count($errors)>0)
            <ul>
                @foreach ($errors->all() as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </ul>
        @endif
        <div class="col">
            <form action="{{route('post.update', ['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="exampleInputEmail1"> Title</label>
                  <input type="text" class="form-control" value="{{$post->title}}" name='title'id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    @foreach ($tags as $item)
                    <input type="checkbox"
                    class="" name='tags[]'
                    value="{{$item->id}}"
                    @foreach ($post ->tag as $item2)
                        @if ($item->id== $item2->id)
                            checked
                        @endif

                    @endforeach
                    >
                    <label for="">{{$item->tag}}</label>

                    @endforeach
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">content</label>
                  <textarea name="content" id=""  class="form-control" cols="30" rows="4">
                    {{$post->content}}
                  </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Photo</label>
                    <input type="file" class="form-control" name='photo'id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">update</button>
              </form>
        </div>
    </div>
</div>

@endsection
