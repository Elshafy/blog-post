@extends('layouts.app')
@section('content')

<div class="container">
    @php
        $ArrayGender=['male', 'female'];
        $Arraypro = ['dearalzor','allepo','damascus'];

    @endphp

    @if (count($errors)>0)
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{$item}}
            </div>
        @endforeach

    @endif

    <form method="POST" action="{{route('profile.update')}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input  name='name'type="text" class="form-control" id="exampleFormControlInput1" value="{{$user->name}}">
          </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">face</label>
            <input  name='facebook'type="text" class="form-control" id="exampleFormControlInput1" value="{{$user->profile->facebook}}">
          </div>
        <div class="form-group">


        <div class="form-group">
          <label for="exampleFormControlSelect2">Gender</label>
          <select class="form-control" id="exampleFormControlSelect2" name='gender'>
              @foreach ($ArrayGender as $item)
                <option value="{{$item}}" {{($user->profile->gender == $item) ?'selected' : '' }}>{{$item}}</option>

              @endforeach



          </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Province</label>
            <select class="form-control" id="exampleFormControlSelect2" name='province'>
                @foreach ($Arraypro as $item)
                  <option value="{{$item}}" {{($user->profile->province == $item) ?'selected' : '' }}>{{$item}}</option>

                @endforeach



            </select>
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Biogragh </label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='bio'>
            {{ $user->profile->bio }}
          </textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password </label>
            <input  name='password'type="password" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">confirm password</label>
            <input  name='c_password'type="password" class="form-control" id="exampleFormControlInput1">
          </div>

        <div class="form-group">
            <button class="btn btn-success " type="submit">update</button>
          </div>
    </form>
</div>

@endsection
