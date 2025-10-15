<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    use HasFactory;

    // protected $fillable =['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // public function scopeFilter($query)
    // {
    //     if (request('search')) {
    //         return $query->where('title', 'like', '%' . request('search') . '%')
    //             ->orWhere('body', 'like', '%' . request('search') . '%');
    //     }
    // }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
