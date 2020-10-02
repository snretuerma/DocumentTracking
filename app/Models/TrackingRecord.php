<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingRecord extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'document_id', 'actions', 'status',
        'approved_by', 'touched_by', 'last_touched',
        'send_to', 'remarks'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function office()
    {
        return $this->belongsTo('App\Models\Office');
    }

    public function document()
    {
        return $this->belongsTo('App\Models\Document');
    }
}
