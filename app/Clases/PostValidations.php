<?php


namespace App\Clases;


use App\Models\PostModel;

class PostValidations
{
    public function validaSlug($slug)
    {
        $consulta = PostModel::where('slug',$slug)->first();
        return $consulta != null;
    }
}
