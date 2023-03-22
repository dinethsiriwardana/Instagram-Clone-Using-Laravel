@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($posts as $post)
    <div class="row">
        <div class="col-5 offset-2">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-2">
            <div>
            
             
                <p>
                    <b>
                        <a href="/profile/{{$post->user->id}}" style="text-decoration:none;">
                            <span class="text-dark"  >
                                {{$post->user->username}}
                            </span>
                        </a>
                    </b> 
                    {{$post->caption}}
                </p>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
