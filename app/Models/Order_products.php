<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order_products extends Model
{
    use HasFactory;
    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    /**
     * Get the Order details from order.
     */
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
