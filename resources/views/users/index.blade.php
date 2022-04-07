@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">All user</h1>
                    <a href="{{route('user.create')}}" class="btn btn-primary"> user </a>


                </div>
            </div>

        </div>
            <div class="row">
            @if ($users->count()>0)
                <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>


                            <th scope="col">email</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>

                                    <td>

                                        <a href="{{route('user.destroy' ,['id'=>$item->id])}} "class="btn btn-primary">delete</a>

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
