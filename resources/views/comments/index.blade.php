@extends('base')
@section('page-title', 'Comments-Boolpress')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
              <th scope="col">User- Author of Comment</th>
              <th scope="col">Comment</th>
              <th scope="col">Relative Post</th>
              <th scope="col">
                <a href="{{route('author')}}" role="button">
                    Author
                </a>
                </th>
                <th scope="col">
                    <a href="{{route('post.index')}}" role="button">
                        Post
                    </a>
                </th>
                <th scope="col">
                    <a href="/" role="button">
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
              @foreach ($comments as $comment)
                <tr>
                    <th scope="row">
                        {{$comment->id}}
                    </th>
                    <td>
                        {{$comment->name}}
                    </td>
                    <td>
                        {{$comment->comment_text}}
                    </td>
                    <td>
                       {{$comment->post_id}}
                    </td>

                </tr>
              @endforeach
          </tbody>
    </table>
@endsection
