@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-8">
        <div class="row ml-3">
            @if(count($posts) > 0)
            @foreach ($posts as $post)
        <div class="card m-2 bg-info" style="width: 18rem;"><a href="{{ route('posts', [$post]) }}">
                <img src="{{ "../images/uploads/posts/" . $post->image }}" class="card-img-top image mx-auto d-block" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    {{-- <div class="card-text">{!! str_limit($post->body, $limit = 180, $end = '...') !!}</div> --}}
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
    </div>
    <div class="col-4  ">
        <div class="row d-flex justify-content-center">
            <div class="card  bg-dark text-light" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $likes }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Likes</h6>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="card  bg-dark text-light" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ count($posts) }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Posts</h6>
                </div>
            </div>
        </div>

        {{-- <div class="row">
                <div class="card col-12" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">1456</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Likes</h6>
                    </div>
                </div>
            </div> --}}

    </div>
</div>
@endsection