@extends('layouts.default')
@section('title',$title)

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h1>{{$title}}</h1>
        <ul class="users">
            @foreach($users as $user)
                <li>
                    <img src="{{$user->gravatar()}}" class="gravatar" />
                    <a class="username" href="{{route('users.show',$user->id)}}">{{$user->name}}</a>
                </li>

            @endforeach
        </ul>

        {!! $users->render() !!}
    </div>

@stop














