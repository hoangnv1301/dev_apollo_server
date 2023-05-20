<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    protected $table ="posts";

    protected $fillable = [
        'thumbnail',
        'title',
        'publish_date',
        'content',
        'view',
    ];
}
