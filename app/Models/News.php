<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'news',
        'user_id',
        'status',
        'user_name',
        'user_job',
        'user_country',
        'user_city',
        'user_school',
        'user_company',
        'user_phone',
        'user_email',
        'user_age',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
