@extends('layouts.app')

@section('content')
  <div class="container"> 
  <form action="/p" enctype="multipart/from-data" method="POST">
    @csrf
      <div class="col-8 offset-2">
      <div class="row">
        <h1>Add New Post</h1>
      </div>
      <div class="form-group row">
        <label for="caption" class="col-md-4 col-form-label ">post caption</label>
            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">

            @error('caption')
                    <strong>{{$message}}</strong>
            @enderror
      </div>
    
    <div class="form-group row">
        <label for="caption" class="col-md-4 col-form-label ">Post Image</label>
            <input id="image" type="file" class="form-control-file" name="image">

            @error('image')
                    <strong>{{ $message }}</strong>
            @enderror
      </div>
      <div class="row pt-4 ">
        <button type="submit" class="btn btn-primary">Add New Post </button>
      </div>
  </form>
  </div>
@endsection
