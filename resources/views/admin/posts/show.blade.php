@extends('layouts.admin')



@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="post-title">{{ $post->title }}</h1>
        <div class="post-content">
            {{ $post->content}}
        </div>
        <p>Autore: {{ $post->author }}</p>
        <p>Slug: {{ $post->slug }}</p>
        <p>Creato il: {{ $post->created_at }}</p>
        <p>Modificato il: {{ $post->update_at }}</p>
    </div>
</div>


@endsection