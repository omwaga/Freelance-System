<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'description', 'level_required'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
