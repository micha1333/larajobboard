<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function scopeStaticPages($query)
    {
        return $query->where('page_type','static_page');
    }
}
