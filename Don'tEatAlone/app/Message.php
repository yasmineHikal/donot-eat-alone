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

        'MessageSenderId', 'MessageReceiverId', 'MessageContent', 'IsRead' ,'conversationid'

    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function conversation(){
        return $this->belongsTo('App\conversation');
    }




}
