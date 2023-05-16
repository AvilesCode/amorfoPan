<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function landing()
    {
        $publicaciones = PostModel::paginate(5);
        //dd($publicaciones);
        return view('blog.index')->with('publicaciones', $publicaciones);
    }

    public function post($post_slug)
    {
        $publicacion = PostModel::where('slug',$post_slug)->first();
        $imagen = "img".rand(1,4).".png";
        //dd($publicacion);
        return view('blog.post')
            ->with('publicacion', $publicacion)
            ->with('imagen', $imagen);
    }
}
