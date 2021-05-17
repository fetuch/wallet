<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['currency_id', 'name', 'type'];

    public function valuations()
    {
        return $this->morphMany(Valuation::class, 'valuationable');
    }

    public function currency()
    {
        return $this->belongsTo(Resource::class, 'currency_id');
    }
}
