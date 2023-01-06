<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryPost extends Pivot
{
    //
    protected $tables = 'category_posts';

    public $timestamps = false;
}
