<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    use HasFactory;

    protected $fillable = ['valuationable_id', 'valuationable_type', 'currency_id', 'date', 'amount'];

    public function valuationable()
    {
        return $this->morphTo();
    }
}
