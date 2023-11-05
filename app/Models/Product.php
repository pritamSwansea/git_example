<?php

namespace App\Models;

use App\Models\Order_products;

use App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    // protected $primaryKey = 'productId';
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    // public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'productCode',
        'productName',
        'productDescription',
        'productPrice'
    ];

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
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'Order_products', 'product_id', 'order_id');
    }
}
