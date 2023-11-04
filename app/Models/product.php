<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class product extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'productId';
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
        'productCode',
        'productName',
        'productDescription',
        'productPrice'
    ];
    /**
     * Get the order details which belongs to a Product.
     */
    public function orderDetails(): BelongsToMany
    {
        return $this->belongsToMany(orderDetails::class, 'order_details', 'productId');
    }
}
