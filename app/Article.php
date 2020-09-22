<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'user_id',
        'name',
        'place',
        'article',
        'like',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function like_users()
    {
        return $this->belongsToMany(User::class, 'likes', 'article_id', 'user_id')->withTimestamps();
    }
}
