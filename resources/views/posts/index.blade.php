{{-- {{$posts}} --}}

@extends('base')
@section('page-title', 'Posts-Boolpress')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Author of Post</th>
              <th scope="col">Post Title</th>
              <th scope="col">Post</th>

                <th scope="col">
                    <a href="{{route('author')}}" role="button">
                         Author
                    </a>
                </th>
                <th scope="col">
                    <a href="{{route('comment.index')}}" role="button">
                         Comment
                    </a>
                </th>
                <th scope="col">
                    <a href="/" role="button">
                         Home
                    </a>
                </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)
                <tr>
                    <th scope="row">
                        {{$post->id}}
                    </th>
                    <td>
                        {{-- vado a prendere il nome e il cognome dell'autore del post --}}
                        {{$post->author->name}}
                        {{$post->author->lastname}}
                    </td>
                    <td>
                        {{$post->post_title}}
                    </td>
                    <td>
                        {{$post->paragraph}}
                    </td>
                </tr>
              @endforeach
          </tbody>
    </table>
@endsection
