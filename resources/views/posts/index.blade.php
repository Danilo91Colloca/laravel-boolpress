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
              <th scope="col">Tags</th>

                <th scope="col">
                    <a style="font-size: 13px;" href="{{route('author')}}" role="button">
                         Author
                    </a>
                </th>
                <th scope="col">
                    <a style="font-size: 13px;" href="{{route('comment.index')}}" role="button">
                         Comment
                    </a>
                </th>
                <th scope="col">
                    <a style="font-size: 13px;" href="/" role="button">
                         Home
                    </a>
                </th>
                <th scope="col">
                    <a style="font-size: 13px;" href="{{route('post.create')}}" role="button">
                         NewPost
                    </a>
                </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $postItem)
                <tr>
                    <th scope="row">
                        {{$postItem->id}}
                    </th>
                    <td>
                        {{-- vado a prendere il nome e il cognome dell'autore del post --}}
                        {{$postItem->author->name}}
                        {{$postItem->author->lastname}}
                    </td>
                    <td>
                        <a href="{{route('post.show', ['post'=>$postItem->id])}}">
                            {{$postItem->post_title}}
                        </a>
                    </td>
                    <td>
                        {{$postItem->paragraph}}
                    </td>
                    @foreach ($postItem->tags as $tagName)
                        <td>
                            {{$tagName->tag_name}}
                        </td>
                    @endforeach
                </tr>
              @endforeach
          </tbody>
    </table>
@endsection
