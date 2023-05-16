<?php


namespace App\Clases;

use App\Models\PostModel;
use GrahamCampbell\Markdown\Facades\Markdown;

class AmorfoTest
{
    public function probando()
    {
        return Markdown::convertToHtml('foo');
    }
}
