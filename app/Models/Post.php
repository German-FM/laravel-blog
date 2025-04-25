<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // Removed duplicate and incorrect import

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'content',
    //     'category',
    //     'published_at',
    // ];
    protected $guarded = [
        'is_active',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}




