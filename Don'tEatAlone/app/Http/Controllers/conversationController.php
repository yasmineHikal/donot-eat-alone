<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Conversation;


class conversationController extends Controller
{
    //

    public function getUserConversationById(Request $request ,Message $message ){


         $message->MessageSenderId = $request->user()->id;
          dd($message);


        $conversation=conversation::where('messageId',$request->user()->id)

            ->orderBy('created_at','desc')
            ->get();
        dd($conversation);

        return response(['data'=>$conversation],200);




    }
}
