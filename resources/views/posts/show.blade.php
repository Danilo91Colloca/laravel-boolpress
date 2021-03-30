@extends('base')

@section('page-title', 'SinglePost-DC')

@section('content')
        <div class="card-group" >
            <div class="card">
                <div style="margin: 0 auto; text-align:center">
                    <h5>Author Profile Pic</h5>
                    <div style="width: 200px;">
                        <img class="card-img-top" src="{{$post->author->detail->pic}}" alt="Card image cap" style="width:100%; border-radius: 50%">
                    </div>
                </div>

                <div class="card-body">
                    <div>Post title:</div>
                    <h5 class="card-title">{{$post->post_title}}</h5>
                    <div class="card-header">createdBy: {{$post->author->name}} {{$post->author->lastname}}</div>
                    <p class="card-text">post content: <br/>{{$post->paragraph}}</p>
                    <p class="card-text"><small class="text-muted">Last updated: {{$post->updated_at}}</small></p>
                </div>
            </div>

        </div>
        <div>
            @yield('comments')
        </div>
        <h3>Comments Section:</h3>
        @foreach ($post->comments as $itemComment)
            <div class="card">
                <div class="card-body">
                   <h5>Author of Comment:</h5>
                    {{ $itemComment->name}}
                    <div >
                        <br/>
                        <h5>comment:</h5>
                        {{ $itemComment->comment_text}}
                    </div>
                    <div>
                        last updated:
                         {{ $itemComment->updated_at}}
                     </div>

                </div>
            </div>
        @endforeach


        <div >
            <span>Go to:</span>
            <br/>
            <a href="{{route('author')}}" role="button">
                   All Author
            </a>
            <a href="{{route('comment.index')}}" role="button">
                    All Comment
            </a>
            <a href="{{route('post.index')}}" role="button">
                All Posts
            </a>
            <a href="/" role="button">
                    Home
            </a>
        </div>

@endsection
