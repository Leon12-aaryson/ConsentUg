<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'image', 'author',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'name');
    }
}
