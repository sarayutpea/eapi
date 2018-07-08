<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\Resource;

class ReviewCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'product' => $this->product->name,
            'customer' => $this->customer,
            'description' => $this->review,
            'star' => $this->star,
            'links' => [
                'link' => route('reviews.show', [
                    $this->product->id,
                    $this->id
                ])
            ]
        ];
        
    }
}
