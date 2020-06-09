<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    public $timestamps = false;

    protected $fillable = [
         'name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages',
    ];    

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    /*
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    */

}
