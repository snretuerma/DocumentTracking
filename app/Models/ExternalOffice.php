<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExternalOffice extends Model
{
    public $timestamp = false;

    protected $guarded = [
        'name', 'sender_name', 'address',
        'contact_number', 'contact_email'
    ];

    public function document()
    {
        return $this->hasOne('App\Models\Document');
    }
}
