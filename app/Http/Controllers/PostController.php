<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Tag;
use App\Author;
use App\Mail\PostCreatedNotify;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Mail::to('habiniy406@ddwfzp.com')->send(new PostCreatedNotify());

        $posts= Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $tags=Tag::all();
        return view('posts.create', compact('authors', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

        //*********verifica che l'autore inserito esista******* */
        $author_id=$data['author_id'];
        if(!Author::find($author_id)){
            dd("l'autore selezionato è inesistente");
        }
        //**************** */
        $newPost= new Post();
        $newPost->fill($data);
        $newPost->save();

         //con l'attach aggancio tutti gli id dei tags
         //si deve posizionare dopo il save() altrimenti prima darà un errore poichè il post prima di questa posizione non esiste
         $newPost->tags()->attach($data['tag_name']);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
