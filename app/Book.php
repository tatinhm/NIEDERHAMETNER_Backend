<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Image;
use App\User;
use App\Order;

class Book extends Model
{
    // alle beschreibbaren properties
    protected $fillable = [
        'isbn', 'title', 'subtitle', 'published',
        'rating', 'description', 'user_id', 'nettoPrice', 'bruttoPrice'
    ];

    public function isFavourite() : bool {
          return $this->rating > 5;
    }

    public function images() : HasMany {
        return $this->hasMany(Image::class);
    }

    public function user() : BelongsTo  {
        return $this->belongsTo(User::class);
    }

    public function authors() : BelongsToMany {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    public function orders() : BelongsToMany {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}
