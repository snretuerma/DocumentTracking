<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    public $timestamp = false;

    public function documents() {
        return $this->hasMany('App\Models\Document');
    }
}
