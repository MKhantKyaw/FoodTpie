<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->product_name,
            'image' => $this->image_url,
            'category'=> $this->category,
            'price' => $this->price,
            'show' => $this->show
        ];
    }

    // public function with($request){
    //     return [
    //         'version' => '1.0.0',
    //         'tech' => 'vue and fetch'
    //     ];
    // }
}
