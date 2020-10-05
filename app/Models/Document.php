<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'tracking_code', 'title', 'document_type_id',
        'originating_office', 'current_office', 'sender_name',
        'page_count', 'date_filed', 'is_terminal',
        'remarks', 'attachment_page_count'
    ];

    public function office()
    {
        return $this->belongsTo('App\Models\Office');
    }

    public function tracking_records()
    {
        return $this->hasMany('App\Models\TrackingRecord');
    }

    public function document_type()
    {
        return $this->belongsTo('App\Models\DocumentType');
    }
}
