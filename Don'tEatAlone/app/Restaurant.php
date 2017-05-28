<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table ="Restaurants";

    protected $fillable= [

        'RestaurantName', 'RestaurantAddress', 'RestaurantPhone',
        'RestaurantLongitude', 'RestaurantLatitude', 'RestaurantPhoto', 'AddBy'

    ];
}
