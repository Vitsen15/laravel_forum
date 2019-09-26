<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reply
 * @package App
 *
 * @property User $owner
 */

class Reply extends Model
{
    public function thread()
    {
        return $this->hasOne(Thread::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
