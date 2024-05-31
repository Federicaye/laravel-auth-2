<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'slug'];

    public static function generateSlug($title){
        $slug = Str::slug($title, '-');
        $count= 1;
        while(Post::where('slug', $slug)->first()){
            $slug = Str::slug($title. '-'. $count, '-');
            $count++;
        }
        return $slug;

    }

}
