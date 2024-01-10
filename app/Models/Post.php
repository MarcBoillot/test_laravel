<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'message',
    ];
    //faire une fonction pour faire les liens entre les tables
    function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}
