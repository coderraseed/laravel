<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Define the table associated with the model
    protected $table = 'categories';

    // Define the relationships (if any)

    // Example: If a Category has many Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
