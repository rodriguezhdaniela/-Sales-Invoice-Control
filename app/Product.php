<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $guarded = [];


    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
