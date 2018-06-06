<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class rfusers extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'email' => $this->email,
            'age'=>$this->age,
            'height'=>$this->height,
            'weight'=>$this->weight,
            'chest'=>$this->chest,
            'rfcode'=>$this->rfcode
        ];
    }
}
