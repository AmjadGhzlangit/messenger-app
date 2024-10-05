<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipient extends Pivot
{
    use HasFactory,SoftDeletes;

    public $timestamps = false;

    protected $casts = [
        'read_at' => 'datetime'
    ];

    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class,'message_id','id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
