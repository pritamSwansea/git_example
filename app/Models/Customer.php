<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customerName',
        'customerAddress',
        'taxId'
    ];
    /**
     * Get customer details.
     */
    public function customerDetails(): HasOne
    {
        return $this->hasOne(CustomerDetails::class);
    }
    /**
     * Get the orders of customer.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
