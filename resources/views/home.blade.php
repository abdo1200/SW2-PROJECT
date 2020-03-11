@extends('layouts.app')

@section('content')
<div class="container-fluid header">
    <div class="row">
        <div class="col-5 ml-4">
            <p>Find deals on hotels, homes and much more...<br>
            <span class="text-head">From cosy country homes to funky city flats</span></p>
        </div>
    </div>
</div>
<div class="col-12 row">
    {{--  @foreach($posts as $post)
    <div class="col-3 offset-1 mt-2">
        <div class="card">
            <div class="card-header">
              {{ $post->title }}
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->body }}</p>
              <a href="{{ '/posts/'. $post->id }}" class="btn btn-primary">see post</a>
            </div>
          </div>
    </div>
    @endforeach  --}}
</div>
@endsection
