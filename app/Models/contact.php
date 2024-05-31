<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    public function index()
    {
        return Home::all();
    }

    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
