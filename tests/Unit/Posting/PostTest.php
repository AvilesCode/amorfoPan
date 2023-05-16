<?php

namespace Tests\Unit\Posting;

use App\Models\PostModel;
use GrahamCampbell\Markdown\Facades\Markdown;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testVerPost()
    {
        $infoPosts = PostModel::all();
        dd($infoPosts);
    }

    public function testMarkdown()
    {
        dd(Markdown::convertToHtml('foo'));
    }
}
