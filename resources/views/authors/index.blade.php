{{-- {{$authors}} --}}
@extends('base')
@section('page-title', 'Autori-Boolpress')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Mail</th>

                <th scope="col">Photo</th>
                <th scope="col">Biogrphy</th>
                <th scope="col">Instagram</th>
                <th scope="col">Facebook</th>
                <th scope="col">Twitter</th>
                <th scope="col">LinkedIn</th>
                <th scope="col">
                    <a href="{{route('post.index')}}" role="button">
                        Post
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
              @foreach ($authors as $author)
                <tr>
                    <th scope="row">
                        {{$author->id}}
                    </th>
                    <td>
                        {{$author->name}}
                    </td>
                    <td>
                        {{$author->lastname}}
                    </td>
                    <td>
                        {{$author->mail}}
                    </td>
                    <td>
                        <img src="{{$author->detail->pic}}" alt="">
                    </td>

                    <td>
                        {{$author->detail->biography}}
                    </td>
                    <td>
                        {{$author->detail->instagram}}
                    </td>
                    <td>
                        {{$author->detail->facebook}}
                    </td>
                    <td>
                        {{$author->detail->twitter}}
                    </td>
                    <td>
                        {{$author->detail->linkedin}}
                    </td>
                </tr>
              @endforeach
          </tbody>
    </table>
@endsection
