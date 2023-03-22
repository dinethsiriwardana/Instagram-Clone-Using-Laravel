@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <a href="/profile/{{$post->user->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="card-img-top">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/profile/{{$post->user->id}}" style="text-decoration:none;">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </h5>
                    <p class="card-text">{{$post->caption}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
