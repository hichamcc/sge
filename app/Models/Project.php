<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'scope', 'detail', 'image', 'highlight', 'sort_order'];
}
