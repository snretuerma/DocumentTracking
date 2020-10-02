<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public $guarded = [
        'name', 'address', 'office_code',
        'contact_number', 'contact_email'
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function documents()
    {
        return $this->hasMany('App\Models\Document');
    }

    public function tracking_records()
    {
        return $this->hasMany('App\Models\TrackingRecord');
    }
}
