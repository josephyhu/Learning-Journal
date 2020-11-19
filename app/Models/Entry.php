<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';
    protected $fillable = [
        'title',
        'hours',
        'minutes',
        'category_id',
        'difficulty',
        'comments',
        'url'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('F d, Y H:i', strtotime($value));
    }
}
