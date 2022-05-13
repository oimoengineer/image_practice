<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
            'body',
        ];
    
    protected $guarded = ['id'];
    
    public static $rules = [
            'body' => 'required|max:500',
            'image' => 'image|file',
        ];
    
}
