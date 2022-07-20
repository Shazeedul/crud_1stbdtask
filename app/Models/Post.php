<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'customer_id', 'post_img'];

    public function customer(){

        return $this->belongsTo(Customer::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
