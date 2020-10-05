<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $timestamp = false;

    protected $guarded = [
        'name'
    ];

    public function users() {
        return $this->hasMany('App\Models\User');
    }
}
