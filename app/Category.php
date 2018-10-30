<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{
    protected $fillable = ['name'];

    public function article()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
