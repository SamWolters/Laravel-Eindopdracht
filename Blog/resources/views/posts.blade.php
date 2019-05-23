@extends('layouts.app')

@section('content')
@if(count($posts) > 0)
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="row d-flex justify-content-center">
            @foreach ($posts as $post)
            <div class="card m-2 bg-info" style="width: 18rem;">
                <img src="{{ "/images/uploads/posts/" . $post->image }}" class="card-img-top image mx-auto d-block" alt="...">
                <div class="card-body pb-2">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="card-text">{!! str_limit($post->body, $limit = 180, $end = '...') !!}</div>
                    <div><small>Written on {{$post->created_at}}</small></div>
                    <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    <span class="btn btn-warning align-middle float-right">{{ $post->likes }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center">
    {{$posts->links()}}
</div>
@else
<p>No posts found</p>
@endif
{{-- <div class="row mt-4 d-flex justify-content-center">
    <div class="col-8 d-flex justify-content-center">
            @if(count($posts) > 0)
            @foreach ($posts as $post)
            <div class="card m-2 bg-info" style="width: 18rem;">
                <img src="{{ "/images/uploads/posts/" . $post->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="card-text">{!! str_limit($post->body, $limit = 180, $end = '...') !!}</div>
                    <div><small>Written on {{$post->created_at}}</small></div>
                    <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    <span class="btn btn-warning align-middle float-right">{{ $post->likes }}</span>
                </div>
            </div>
        
        @endforeach
        <div class="row d-flex justify-content-center">
            {{$posts->links()}}
        </div>
        @else
        <p>No posts found</p>
        @endif
    </div>
</div> --}}
@endsection