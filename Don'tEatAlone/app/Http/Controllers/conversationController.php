<?php

namespace App\Http\Controllers;

use App\Message;
use Auth;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class conversationController extends Controller
{
<<<<<<< HEAD
    //

    public function index(Request $request ,Message $message ){
=======
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
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1


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



    }*/
}
