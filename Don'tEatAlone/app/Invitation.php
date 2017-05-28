<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
use App\Restaurant;

class Invitation extends Model
{
    //
    protected $table ="invitations";
    protected $primaryKey = 'InvitationId';

    protected $fillable= [

        'InvitationSenderId', 'InvitationReceiverId', 'InvitationStartTime',
        'InvitationDate', 'RestaurantId', 'InvitationResponse', 'InvitationEndTime'

    ];


    protected $appends= ['sender','receiver','restaurant'];


    public function getCreatedAtAttribute($value){



        return Carbon::parse($value)->diffForHumans();


    }


    public function getSenderAttribute(){

        return User::where('id',$this->InvitationSenderId)->first();


    }


    public function getReceiverAttribute(){


        return User::where('id',$this->InvitationReceiverId)->first();


    }

    public function getRestaurantAttribute(){


        return Restaurant::where('id',$this->RestaurantId)->first();

    }
}
