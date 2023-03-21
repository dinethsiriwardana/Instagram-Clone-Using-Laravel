@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< Updated upstream
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <h1>Add New Post</h1>
                    <div class="row">
                        <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                            <input id="caption" type="text"
                                class="ms-2 form-control @error('caption') is-invalid @enderror"
                                name="caption" value="{{ old('caption') }}" 
                                autocomplete="caption" autofocus>

                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label>

                        <input type="file" class="form-control-file" id="image" name = "image" src="" alt="">

                        @error('image')
                        
                            <strong>{{ $message }}</strong>
                       
                    @enderror
                    </div>

                    <div class="row-2 pt-3">
                        <button class="btn btn-primary"> Add New Post</button>
                    </div>
            </div>
        </div>
    </form>
        
=======
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
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
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
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100 pt-1" srcset="">
            </a>
        </div>
        @endforeach
    </div>
>>>>>>> Stashed changes
</div>
@endsection
