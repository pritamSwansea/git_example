<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Order_products;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
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
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    // /**
    //  * Order has many order details.
    //  */
    public function orderProduct(): HasMany
    {
        return $this->hasMany(Order_products::class);
    }
    /**
     * The products that belong to the customer.
     */
    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'Order_products', 'order_id', 'product_id');
    }
}
