<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Message;

class Conversation extends Model
{
    //
    protected $table ="conversations";

    protected $fillable= [

        'id','MessageId '/*,'SenderId','ReceiverId' */,'user1','user2'

    ];

    protected $appends= ['message'/*,'sender','receiver'*/];

    public function getMessageAttribute(){

        return Message::where('MessageId',$this->MessageId)->first();


    }
/*
    public function getSenderAttribute(){

        return User::where('id',$this->SenderId)->first();


    }


    public function getReceiverAttribute(){


        return User::where('id',$this->ReceiverId)->first();

    } **/

}
