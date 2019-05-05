<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orderlog extends Model
{
    protected $fillable = [
        'state', 'description', 'commentAdmin'
    ];

    public function order() : BelongsTo{
        return $this->belongsTo(Order::class);
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
