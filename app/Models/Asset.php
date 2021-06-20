<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'user_id', 'resource_id', 'unit_price', 'unit'];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function valuations()
    {
        return $this->morphMany(Valuation::class, 'valuationable');
    }

    public function scopePositive($query)
    {
        return $query->where('quantity', '>', 0);
    }
}
