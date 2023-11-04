<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class order extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'orderId';
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'orderDate',
        'orderAmount',
        'comments'
    ];
    /**
     * Get the customer who owns the order.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(customer::class, 'foreign_key', 'customerId');
    }

    /**
     * Get the order details which belongs to a order.
     */
    public function orderDetails(): BelongsToMany
    {
        return $this->belongsToMany(orderDetails::class, 'order_details', 'orderId');
    }
}
