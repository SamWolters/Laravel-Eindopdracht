@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-8">
        <div class="row ml-3">
            @foreach ($posts as $post)
            <div class="card m-2 bg-info" style="width: 18rem;">
                <img src="{{ "../images/uploads/posts/" . $post->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="card-text">{!! $post->body !!}</div>
                    <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Go somewhere</a>
                    <span class="btn btn-warning align-middle float-right">{{ $post->likes }}</span>
                </div>
            </div>
            @endforeach
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