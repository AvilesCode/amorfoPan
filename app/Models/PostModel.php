<?php

namespace App\Models;

use App\Clases\PostUtils;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'post';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'slug',
        'content',
        'content_md'
    ];

    public function getTitleAttribute($title)
    {
        return ucfirst($title);
    }

    public function setContentMdAttribute($value)
    {
        $this->attributes['content_md'] = Markdown::convertToHtml($value);
    }
}
