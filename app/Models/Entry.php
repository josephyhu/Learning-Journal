<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'date_created',
        'time_created',
        'hours',
        'minutes',
        'category_id',
        'difficulty',
        'notes',
        'url'
    ];
    protected $dates = ['date_created', 'time_created'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'entry_user', 'entry_id', 'user_id');
    }
}
