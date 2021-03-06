@extends('base')
@section('page-title', 'Create New Post')

@section('content')

{{-- @dump($authors) --}}
    <div style="padding:25px">
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="authors">Authors</label>
                <select class="form-control" id="authors" name="author_id">
                    @foreach ($authors as $author)
                         <option value="{{$author->id}}">{{$author->name}}{{$author->lastname}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="post_title">Title</label>
                <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Insert Title">
            </div>
            <div class="form-group">
                <label for="paragraph">Post</label>
                <textarea class="form-control" id="paragraph" name="paragraph" rows="20"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Your Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
                <label for="tag-multiselect">Select Tags</label>
                <select multiple class="form-control" id="tag-multiselect" name="tag_name[]">
                    @foreach ($tags as $tagCol)
                        <option value="{{$tagCol->id}}">{{$tagCol->tag_name}}</option>
                    @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Store</button>
        </form>
    </div>

@endsection
