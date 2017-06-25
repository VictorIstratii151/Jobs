<?php

namespace App;

class Post extends Model // This model extends the general Eloquent Model from the same namespace
{
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
