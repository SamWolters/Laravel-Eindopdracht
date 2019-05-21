@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div>
<div class="mt-5">
    <span class="d-block pt-2 text-center font-weight-bold h1" id="header">Article</span>
    <span class="d-block heading-line" id="line"></span>
</div>
<div class="row d-flex justify-content-center">
    <!-- testing with cards -->
    <div class="card m-2 text-center" style="width: 18rem;">
    <img src="{{ "images/uploads/posts/" . $post->image }}" class="card-img-top card-img mx-auto d-block pt-1" alt="test">
        <div class="card-body pt-2">
        <h5 class="card-title font-weight-bold">{{ $post->title }}</h5>
            <div class="card-text">{!! $post->body !!}</div>
        </div>
    </div>
</div>
@endsection