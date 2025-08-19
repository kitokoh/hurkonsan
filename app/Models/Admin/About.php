<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['text'];
    protected $table = 'abouts';

    //protected $guarded = [];

    /*public $translatable = ['name','text','slug'];
    protected $table = 'blogs';

    public function getImageAttribute($image){
        return json_decode($image);
    }

    public function getRouteKeyName(){
        return 'slug';
    }*/

}
