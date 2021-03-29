@extends('base')

@section('page-title', 'SinglePost-DC')

@section('content')
        <div class="card-group" >
            <div class="card">
                <div style="margin: 0 auto; text-align:center">
                    <h5>Author Profile Pic</h5>
                    <div style="width: 100px;">
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
@endsection
