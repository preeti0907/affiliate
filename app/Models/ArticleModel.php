<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;
    protected $table    = 'article';

    public function category()
    {
        return $this->hasOne('App\Models\CategoryModel', 'id', 'category_id');
    }
}
