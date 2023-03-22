@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row m-5 ">
        <div class="col-5 m-5">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4 m-5">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3 pb-2">

                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100 " style="max-width: 40px">
                    </div>
                    <div>
                        <h5>
                            <b>
                                <a href="/profile/{{$post->user->id}}" style="text-decoration:none;">
                                    <span class="text-dark" >
                                        {{$post->user->username}}
                                    </span>
                                </a>
                            </b>
                                <a href="#" class="ps-3">Follow</a>
                                
                        </h5>
                       
                    </div>

                </div>
                <hr>
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
</div>
@endsection
