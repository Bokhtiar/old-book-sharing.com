<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'image',
    ];
    protected $guarded;


    public static function categoryBook($id){
        return Book::where('category_id', $id)->take(3)->get();
    }
}
