@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection
