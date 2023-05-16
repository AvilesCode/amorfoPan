<?php

namespace App\Http\Controllers\Admin;

use App\Clases\PostUtils;
use App\Clases\PostValidations;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = PostModel::paginate(8);
        return view('admin.post.post_list')->with('publicaciones', $publicaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.post_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:2|max:500',
        ]);
        //dd($validated);

        $valores = $request->toArray();
        $validadorSlug = new PostValidations();
        $slugExistente = false;
        do
        {
            $slug = PostUtils::formateadorSlug($valores['title'], $slugExistente);
            $slugExistente = $validadorSlug->validaSlug($slug);
        } while($slugExistente);
        //dd("guardar: ".$slug);

        $post = new PostModel();
        $post->title = $valores['title'];
        $post->slug = $slug;
        $post->content = $valores['content'];
        if(isset($valores['content_md'])) { $post->content_md = $valores['content_md']; }
        $post->save();

        return redirect('admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostModel  $postModel
     * @return \Illuminate\Http\Response
     */
    public function show(PostModel $postModel)
    {
        dd("show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostModel  $postModel
     */
    public function edit($id, PostModel $postModel)
    {
        //dd($postModel->find($id));
        return view('admin.post.post_update')->with('publicacion', $postModel->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostModel  $postModel
     */
    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:2|max:500',
        ]);

        $valores = $request->toArray();
        //dd($valores);

        $postModel = PostModel::find($id);
        $postModel->title = $valores['title'];
        $postModel->content = $valores['content'];
        if(isset($valores['content_md'])) { $postModel->content_md = $valores['content_md']; }
        $postModel->save();

        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostModel  $postModel
     */
    public function destroy($id, PostModel $postModel)
    {
        $postModel->where('id',$id)->delete();
        return redirect('admin/post');
    }
}
