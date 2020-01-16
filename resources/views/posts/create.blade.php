@extends('layouts.app')

@section('content')
<div class="container">

  <form action="/p" enctype="multipart/form-data" method="Post">
    @csrf

    <div class="col-8 offset-2">

      <div class="row">
        <h1>Add New Post</h1>
      </div>
      <div class="form-group row">
        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
        <input id="caption" type="text" class="form-control {{ $errors->has('caption') ? ' is-invalid' : ''}}" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

            @error('caption')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->caption }}</strong>
                </span>
            @enderror
      </div>

      <div class="row">
        <label for="image" class="col-md-4 col-form-label">Post Image</label>
        <input type="file" id="image" name="image" class="form-control-file">
        @error('image')
                    <strong>{{ $errors->image }}</strong>
            @enderror
      </div>

      <div class="row pt-4">
        <button class="btn btn-primary">Post</button>
      </div>

    </div>
  </form> 


</div>
@endsection
