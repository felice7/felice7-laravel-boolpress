@extends('layouts.admin')



@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <h1 class="post-title">Creazione nuovo post</h1>
        
            <form class="" action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $post ->title }}">
                </div>

                <div class="form-group">
                    <label for="author">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Autore" value="{{ $post ->author }}">
                </div>

                <div class="form-group">
                    <label for="content">Testo articolo</label>
                    <textarea  class="form-control" name="content" id="content" rows="8" placeholder="scrivi il tuo articolo">{{ $post ->content }}</textarea>
                </div>
                

                <div class="form-group">
                    <label for="title"></label>
                    <input type="submit" class="btn btn-primary" value="Aggiorna">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection