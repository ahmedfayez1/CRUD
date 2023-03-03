<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $guarded=[];
    // public $timestamps=false;
    protected $perPage=10;

    function User()
    {
        return $this->belongsTo(User::class);
    }

}
