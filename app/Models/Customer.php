<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'status', 'image'];

    public function post()
    {
        return $this->hasOne(Post::class, 'customer_id', 'id');
    }
}
