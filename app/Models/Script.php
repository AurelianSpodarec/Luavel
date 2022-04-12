<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Script extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'category_id',
        'excerpt',
        'slug',
        'title'
    ];

    public function category()
    {
        return $this->belongsTo(ScriptCategory::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
