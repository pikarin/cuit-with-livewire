<?php

namespace App\Models;

use App\Events\CuitCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cuit extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => CuitCreated::class,
    ];

    /**
     * @return BelongsTo<User, Cuit>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
