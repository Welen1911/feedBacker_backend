<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'type',
        'text',
        'fingerprint',
        'api_key_id',
        'device',
        'page',
    ];

    public function apikey()
    {
        return $this->belongsTo(ApiKey::class);
    }
}
