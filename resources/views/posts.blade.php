@extends('layouts.public')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h1>Lista di tutti i post</h1>
                @forelse ($posts as $post)

                <li><a href="{{ route('blog.show', [ 'slug' => $post->slug ])}}"> {{ $post->title }} </a></li>
                    
                @empty

                <li>Nessun post</li>
                    
                @endforelse
            </div> 
        </div> 
    </div> 
@endsection