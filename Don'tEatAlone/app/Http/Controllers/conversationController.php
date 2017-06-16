<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class conversationController extends Controller
{
    //

    public function index(Request $request ,Message $message ){


    /*     $message->MessageSenderId = $request->user()->id;
          dd($message);


        $conversation=conversation::where('id',$request->user()->id)

            ->orderBy('created_at','desc')
            ->get();
        dd($conversation);

        return response(['data'=>$conversation],200);   */



        $conversation=DB::table('messages')
           ->join('conversations' ,'messages.Conversationid','=','conversations.id')
            ->where('MessageReceiverId','=',Auth::user()->id)
            ->join('users','users.id','=','messages.MessageSenderId')
            ->where('IsRead','=',0)
            ->orderBy('messages.created_at','desc')
          //  ->groupBy('MessageSenderId')
            ->select('messages.MessageSenderId','users.Username','messages.created_at','users.UserPhoto','messages.MessageContent','messages.id')
            ->get();



       // return $conversation;
        return view('users.messages',compact('conversation'));



    }
}
