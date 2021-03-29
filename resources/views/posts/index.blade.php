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

              <th scope="col">User- Author of Comment</th>
              <th scope="col">Comment</th>
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
