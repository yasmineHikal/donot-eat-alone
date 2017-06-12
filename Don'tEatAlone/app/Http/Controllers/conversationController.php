<?php

namespace App\Http\Controllers;

use App\Message;
use Auth;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Conversation;


class conversationController extends Controller
{
    public function allConversations(){
        $id = Auth::user()->id;
        $conversations = DB::table('conversations')
                        ->join('messages','messages.conversationId','=','conversations.id')
                        ->select('*')
                        ->where('conversations.user1','=',$id)
                        ->get();
        $users = DB::table('users')
                        ->join('messages','messages.MessageReceiverId','=','users.id')
                         ->select('*')
                        ->where('users.id','=',$id)
                        ->get();

        return view('users.conversations',compact('conversations','users'));
    }
   public function getAllConversations(){
        $id = Auth::user()->id;
        $conversations = DB::table('conversations')
                        ->join('messages','messages.conversationId','=','conversations.id')
                        ->select('*')
                        ->where('conversations.user1','=',$id)
                        ->get();
        $users = DB::table('users')
                        ->join('messages','messages.MessageReceiverId','=','users.id')
                         ->select('*')
                        ->where('users.id','=',$id)
                        ->get();
        return back()->with('conversations','users');
        //return view('users.layouts.layout',compact('conversations','users'));
   }
    /*public function getUserConversationById(Request $request ,Message $message ){


         $message->MessageSenderId = $request->user()->id;
          dd($message);


        $conversation=conversation::where('messageId',$request->user()->id)

            ->orderBy('created_at','desc')
            ->get();
        dd($conversation);

        return response(['data'=>$conversation],200);




    }*/
}
