<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetModel extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'tweet',
        'bazz_models_id'
    ];
}
