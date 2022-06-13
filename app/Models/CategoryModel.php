<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table    = 'category';

    public function subcategory()
    {
        return $this->hasMany(\App\Models\CategoryModel::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\CategoryModel::class, 'parent_id');
    }

}
