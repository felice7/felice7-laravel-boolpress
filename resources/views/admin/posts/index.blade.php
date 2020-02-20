@extends('layouts.admin')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Lista di tutti i post per la gestione admin
                <a class="btn btn-success float-right" href="{{ route('admin.posts.create')}}">Crea un nuovo post</a></h1>
            </div>
            
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Autore</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->author }}</td>
                            <td>
                                <form class="" action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="POST">
                                    <a class="btn btn-info" href="{{ route('admin.posts.show', ['post' => $post->id ]) }}">Visualizza</a>
                                    <a class="btn btn-warning" href="{{ route('admin.posts.edit', ['post' => $post->id ]) }}">Modifica</a>
                                    <input type="submit" class="btn btn-danger" value="Cancella">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Nessun posts</td>
                        </tr>
                    @endforelse
                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection