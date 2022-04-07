@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Edit tag</h1>
                <a href="{{route('tags')}}" class="btn btn-primary"> All tags</a>

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
            <form action="{{route('tag.update', ['id'=>$tag->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="exampleInputEmail1"> Title</label>
                  <input type="text" class="form-control" value="{{$tag->tag}}" name='tag'id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>


                <button type="submit" class="btn btn-primary">update</button>
              </form>
        </div>
    </div>
</div>

@endsection
