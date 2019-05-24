@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-10 offset-2">
        <div class="row">
        <h1>Post: {{ $post->title }}</h1>
        </div>
        <div class="row">
            <div class="col-9">
            <img src="{{ "../images/uploads/posts/" . $post->image }}" alt="test" style="height:200px;">
            {!! $post->body !!}
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card  bg-dark text-light" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $likes }}</h4>
                <h6 class="card-subtitle mb-2 text-muted">Likes</h6>
            </div>
        </div>
    </div>
</div>
{{-- <example-component></example-component> --}}
@endsection