<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'subject', 'body', 'owner_id'
    ];

    protected $casts = [
        'body' => 'array'
    ];
}
