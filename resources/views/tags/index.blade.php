@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">All Tags</h1>
                    <a href="{{route('tag.create')}}" class="btn btn-primary"> Create tag</a>


                </div>
            </div>

        </div>
            <div class="row">
            @if ($tags->count()>0)
                <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>

                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->tag}}</td>

                                    <td>

                                        <a href="{{route('tag.edit',['id'=>$item->id ] ) }}" class="btn btn-primary">edit</a>
                                        <a href="{{route('tag.destroy' ,['id'=>$item->id])}} "class="btn btn-primary">delete</a>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>


                </div>
            @else
                <div class="col">
                    <div class="alert alert-dark" role="alert">
                        no Tags
                    </div>

                </div>

            @endif

    </div>
@endsection
