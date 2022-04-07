@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Trashed Posts</h1>

                    <a href="{{route('posts')}}" class="btn btn-danger"> All Posts</a>

                </div>
            </div>

        </div>
            <div class="row">
            @if ($posts->count()>0)
                <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">user</th>
                            <th scope="col">date</th>

                            <th scope="col">photo</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->created_at->format('d/m/Y')}}</td>

                                    <td>
                                        <img src="{{URL:: asset($item->photo) }}" alt="{no" class="img-thumbnail" width="100" height="100">
                                    </td>
                                    <td>


                                        <a href="{{route('post.restore',['id'=>$item->id ] ) }}" class="btn btn-primary">restor</a>
                                        <a href="{{route('post.hdelete' ,['id'=>$item->id])}} "class="btn btn-primary">hard delete</a>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>


                </div>
            @else
                <div class="col">
                    <div class="alert alert-dark" role="alert">
                        no Posts
                    </div>

                </div>

            @endif

    </div>
@endsection
