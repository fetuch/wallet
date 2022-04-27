<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resource extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['currency_id', 'name', 'type'];

    /**
     * @return HasMany
     */
    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class);
    }

    /**
     * @return HasOne
     */
    public function current_valuation(): HasOne
    {
        return $this->hasOne(Valuation::class)->latest('date');
    }

    /**
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Resource::class, 'currency_id');
    }
}
