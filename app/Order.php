<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function addOrderDetail($orderDetail)
    {
        $this->orderDetails()->create($orderDetail);
    }
}
