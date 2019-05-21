@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-10 offset-2">
        <div class="row">
            <h1>Edit Post</h1>
        </div>
        <div class="row">
            <div class="col-9">
                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' =>
                'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="form-group">
                    {{Form::file('image')}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary float-left'])}}
                {!! Form::close() !!}
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
            {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection