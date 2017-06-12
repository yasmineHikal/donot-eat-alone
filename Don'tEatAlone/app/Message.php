<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Conversation;
class Message extends Model
{
    //
    protected $table ="messages";

    protected $fillable= [

        'MessageSenderId', 'MessageReceiverId', 'MessageContent', 'IsRead'

    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function conversation(){
        return $this->belongsTo('App\conversation');
    }

    protected $appends= ['sender','receiver'];


    public function getCreatedAtAttribute($value){



        return Carbon::parse($value)->diffForHumans();


    }

    public function getSenderAttribute(){

        return User::where('id',$this->MessageSenderId)->first();


    }


    public function getReceiverAttribute(){


        return User::where('id',$this->MessageReceiverId)->first();

    }
}
