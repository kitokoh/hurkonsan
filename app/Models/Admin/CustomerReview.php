<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CustomerReview extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['review','job'];
    protected $table = 'customer_reviews';
}
