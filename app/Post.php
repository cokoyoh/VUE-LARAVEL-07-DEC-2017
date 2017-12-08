<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'body'];

    public function path()
    {
        return '/posts/' . $this->id;
    }

//    public function getCreatedAtColumn($value)
//    {
//        return Carbon::diffForHumans($value);
//    }
}
