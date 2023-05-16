<?php


namespace App\Clases;


use Illuminate\Support\Str;

class PostUtils
{
    public static function formateadorSlug($titulo, $slugExistente)
    {
        if($slugExistente)
        {
            $articulos = ['el','la','los','las','en','una','unos','a','de'];
            $slug = str_replace($articulos, "", $titulo);
            $slug .= '-'.Str::random(1);
        }
        else
        {
            $articulos = ['el','la','los','las','en','una','unos','a','de'];
            $slug = str_replace($articulos, "", $titulo);
        }
        //dump("Slug: ".$slug);
        return str_replace(' ', '-', $slug);
    }
}
