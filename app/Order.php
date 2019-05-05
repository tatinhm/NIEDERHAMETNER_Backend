<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Book;
use App\User;
use App\Orderlog;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'nettoPrice', 'bruttoPrice', 'state', 'userAddress'
    ];


    public function books() : BelongsToMany {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }

    public function order_logs() : HasMany {
        return $this->hasMany(OrderLog::class);
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
