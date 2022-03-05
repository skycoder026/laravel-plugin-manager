<?php

namespace Skycoder\LravelPluginManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PluginManager extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}
