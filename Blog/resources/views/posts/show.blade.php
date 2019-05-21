@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-10 offset-2">
        <div class="row">
        <h1>Post: {{ $post->title }}</h1>
        </div>
        <div class="row">
            <div class="col-9">
                
            <h1>{{ $post->title}}</h1>
            <img src="{{ "../../images/uploads/posts/" . $post->image }}" alt="test" style="height:200px;">
            {!! $post->body !!}
            </div>
        </div>
    </div>
</div>
@endsection