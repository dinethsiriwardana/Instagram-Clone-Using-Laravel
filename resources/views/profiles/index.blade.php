@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/assets/profile.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>
                    {{$user->username}}
                </h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class = "pe-5"><strong>{{$user->posts->count()}} </strong>posts</div>
                <div class = "pe-5"><strong>492 </strong>followers</div>
                <div class = "pe-5"><strong>337 </strong>following</div>
            </div>
            <div class="pt-4"><b>{{$user->profile->title}}</b></div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
              <a href="http://{{$user->profile->url}}" target="_blank" rel="noopener noreferrer">{{$user->profile->url}}</a> 
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100 pt-1" srcset="">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
