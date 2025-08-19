<?php

namespace App\Models\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['title','text','properties'];

    protected $table = 'products';
    //protected $primaryKey = 'uuid';


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
