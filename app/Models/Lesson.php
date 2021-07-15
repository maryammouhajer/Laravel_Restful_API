<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'title',
      'body',
    ];

    public function user(){
      return $this->belongsTo(User::class); //select * from users where lessons_id=user_id
    }

    public function tags(){
      return $this->belongsToMany(Tag::class,'lesson_tags'); 
    }
}
