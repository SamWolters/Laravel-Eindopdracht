@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-10 offset-2">
        <div class="row">
        <h1>{{ $post->title }}</h1>
        </div>
        <div class="row">
            <div class="col-9">
            <img src="{{ "../../images/uploads/posts/" . $post->image }}" alt="test" style="height:200px;">
            {!! $post->body !!}
            </div>
            {{-- <div class="col-2">
                @if (Auth::user()->id == $post->user_id)
                <h1>Hello 1</h1>
                @elseif(Auth::user()->id == $post->user_id)
                    <h1>Hello 2</h1>
                @else
                    
                @endif
            </div> --}}
        </div>
    </div>
</div>
@endsection