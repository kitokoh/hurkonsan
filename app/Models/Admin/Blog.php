<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['text','name','slug'];
    protected $table = 'blogs';
    public function getImageAttribute($image)
    {
        return json_decode($image);
    }
}
