<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'quantity', 'user_id', 'resource_id', 'unit_price', 'unit'];

    /**
     * @return BelongsTo
     */
    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopePositive(Builder $query): Builder
    {
        return $query->where('quantity', '>', 0);
    }
}
