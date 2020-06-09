<?php

namespace App\Repositories;

use App\Models\ {
    Room

};

class RoomRepository
{
    /**
     * The Repository instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Create a new RoomRepository instance.
     *
     * @param  \App\Models\Room $room      
     */
    public function __construct(Room $room)
    {
        $this->model = $room;
    }

    /**
     * Get data from rooms.
     *
     * @param  \App\Models\Room $room      
     */
    public function getData($parameters) 
    {
        $query = $this->model
           ->select('id', 'name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages')
           ->where('name', 'like', '%' . $parameters['name'] . '%')           
           ->where('price', '>=', $parameters['pricemin'])
           ->where('price', '<=', $parameters['pricemax'])
           ->whereIn('bedrooms', $parameters['bedrooms'])
           ->whereIn('bathrooms', $parameters['bathrooms'])
           ->whereIn('storeys', $parameters['storeys'])
           ->whereIn('garages', $parameters['garages']);

        return $query->get();   
    }

}
