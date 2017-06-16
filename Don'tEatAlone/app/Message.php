<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    //
    protected $table ="messages";

    protected $fillable= [

        'MessageSenderId', 'MessageReceiverId', 'MessageContent', 'IsRead' ,'conversationid'

    ];




}
