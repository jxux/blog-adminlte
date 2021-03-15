<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsto(User::class);
    }

    public function category(){
        return $this->belongsto(Category::class);
    }

    //Relacion muchos a muchos
    public function tags(){
        return $this->belongstoMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}