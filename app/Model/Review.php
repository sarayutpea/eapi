<?php

namespace App\Model;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function product(){
        // return $this->belongsTo(Product::class);
        return [
            'product' => $this->product->name,
            'customer' => $this->customer,
            'description' => $this->review,
            'star' => $this->star
        ];
    }
}
