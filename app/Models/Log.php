<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = [
        'user_id', 'action', 'item_id',
        'table_name', 'original_values', 'new_values'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
