<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 */
class Thread extends Model
{
    public function path()
    {
        return route('thread', $this->id);
    }
}
