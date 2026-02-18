<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'capabilities', 'icon', 'badge', 'sort_order'];

    protected $casts = [
        'capabilities' => 'array',
    ];
}
