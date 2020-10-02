<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'tracking_code', 'title', 'type',
        'purpose', 'originating_office', 'current_office',
        'sender_name', 'page_count', 'date_filed',
        'is_terminal', 'remarks', 'attachment'
    ];

    public function office()
    {
        return $this->belongsTo('App\Models\Office');
    }

    public function tracking_records()
    {
        return $this->hasMany('App\Models\TrackingRecord');
    }
}
