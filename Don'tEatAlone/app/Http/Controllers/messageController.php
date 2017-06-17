<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Conversation;
use DB;
use App\Http\Requests;

use Auth;
use App\Conversation;
use Illuminate\Support\Facades\DB;

class messageController extends Controller
{

<<<<<<< HEAD

    public function sendMessage(Request $request,Message $msg )
    {

          $con= Conversation::create();

          $msg->Conversationid = $con->id;
          $msg->MessageContent = $request->input('MessageContent');
          $msg->MessageReceiverId = $request['InvitationReceiverId'];
          $msg->MessageSenderId = Auth::user()->id;
          $msg->IsRead =  0   ;
          $msg->save();



        return back()->withFlashMessage('Message sent successfully');


    }
=======
    /*public function index(){

        //return view('users.messages');
        echo "hi";
    }*/
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1

    public function ReadMesage(Request $request){


        $id= $request['InvitationReceiverId'];
        $mes = Message::where('messageId',$id)->first();

        $mes->IsRead = 1;
//        return $reservation;
        $mes->save();
    }




    /*
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View

    public function index($Id){




      $messages=DB::table('messages')
          ->join('conversations' ,'messages.Conversationid','=','conversations.id')
          ->where('MessageReceiverId','=',Auth::user()->id)
          ->join('users','users.id','=','messages.MessageSenderId')
          ->where('IsRead','=',0)
          ->orderBy('messages.created_at','desc')
          ->where('MessageSenderId',$Id)
          ->select('messages.MessageSenderId','users.Username','users.UserPhoto','messages.MessageContent','messages.MessageId')
          ->get();
      //  dd($messages);



       return view('users.viewMessage');
    }

<<<<<<< HEAD
  /**
    public function getMessages(Request $request){
        $messages=message::where('MessageReceiverId',$request->user()->id)
            ->orderBy('created_at','desc')
            ->get();

        dd($messages);
        return $messages ;



=======
    public function getMessages(Request $request,$id){
        $messages=message::where('MessageSenderId',$request->user()->id)
            ->orderBy('created_at','asc')
            ->get();
        $senders = DB::table('users')
                    ->join('messages','users.id','=','messages.MessageSenderId')
                    ->where('messages.MessageSenderId','=',$request->user()->id)
                    ->orderBy('messages.created_at','desc')
                    ->get();
        $receivers = DB::table('users')
                    ->join('messages','users.id','=','messages.MessageReceiverId')
                    ->where('messages.MessageReceiverId','=',$id)
                    ->orderBy('messages.created_at','desc')
                    ->get();
        return view('users.messages',compact('messages','senders','receivers','id'));
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1
    }

    public function getMessageById(Request $request){
        $message=message::where('id',$request->input('id'))->first();

        //if message is not read change the status......

        if($message->IsRead ==0){

            $message->IsRead = 1;
            $message->save;
        }

        return $message;


    }

    public function getMessageSent(Request $request){


        $messageSent=message::where('MessageSenderId',$request->user()->id)
            ->orderBy('created_at','desc')
            ->get();

        //dd($messageSent);
        //return $messageSent;



    }

    public function sendMessage(Request $request,$id,Conversation $conversation){
        /*$attributes=[

            'MessageSenderId' => $request->input('MessageSenderId'),
            'MessageReceiverId'=> $request->input('MessageReceiverId'),
            'MessageContent'=> $request->input('MessageContent'),
            'IsRead'=> 0,

        ];

        $msg = message::create($attributes);

        $data= message::where('id',$msg->MessageId)->first();

        return $data;*/
        /*if conversation users found complete on it or start a new one*/

        $con = DB::select('select * from conversations where user1 =? and user2 =?',[$request->user()->id,$id],[$id,$request->user()->id]);
        $conv = array($con);
        if(empty($conv[0])){
            $conversation->user1 = $request->user()->id;
            $conversation->user2 = $id;
            $conversation->save();
            $sender = DB::table('users')
                    ->join('messages','users.id','=','messages.MessageSenderId')
                    ->where('messages.MessageSenderId','=',$request->user()->id)
                    ->get();
            $messages=DB::table('messages')
                    ->join('users','users.id','=','messages.MessageSenderId')
                    ->where('messages.MessageSenderId','=',$request->user()->id,'messages.MessageReceiverId','=',$id)
                    ->insert([
                        'ConversationId' => $conversation->id,
                        'MessageSenderId' => $request->user()->id,
                        'MessageReceiverId' => $id,
                        'MessageContent' => $request->input('MessageContent'),
                        'IsRead'=> 0,
                        ]);

                return back();
        }else{
            $conv = array($con);
            $senderID = $request->user()->id;
            $converID = $conv[0][0]->id;
            
            if($con[0]->user1=$senderID && $con[0]->user2=$id){
            $sender = DB::table('users')
                    ->join('messages','users.id','=','messages.MessageSenderId')
                    ->where('messages.MessageSenderId','=',$request->user()->id)
                    ->get();
            $messages=DB::table('messages')
                    ->join('users','users.id','=','messages.MessageSenderId')
                    ->where('messages.MessageSenderId','=',$request->user()->id,'messages.MessageReceiverId','=',$id)
                    ->insert([
                        'ConversationId' => $converID,
                        'MessageSenderId' => $senderID,
                        'MessageReceiverId' => $id,
                        'MessageContent' => $request->input('MessageContent'),
                        'IsRead'=> 0,
                        ]);

                return back();
            }
            
        }
/*

        $sender = DB::table('users')
                    ->join('messages','users.id','=','messages.MessageSenderId')
                    ->where('messages.MessageSenderId','=',$request->user()->id)
                    ->get();



        $messages=DB::table('messages')
        ->join('users','users.id','=','messages.MessageSenderId')
        ->where('messages.MessageSenderId','=',$request->user()->id,'messages.MessageReceiverId','=',$id)
        ->insert([
            'ConversationId' => $conversation->id,
            'MessageSenderId' => $request->user()->id,
            'MessageReceiverId' => $id,
            'MessageContent' => $request->input('MessageContent'),
            'IsRead'=> 0,
            ]);

        return back();
        /*$msg = DB::table('messages')
                     ->select(DB::raw('MessageId'))
                     ->where('MessageSenderId', '=', $request->user()->id)
                     ->orderby('MessageId','desc')
                     ->first();
                $message = (array) $msg;


        /*$conversation=DB::table('conversations')
        ->join('messages','messages.MessageId','=','conversations.MessageId')
        ->where('messages.MessageSenderId','=',$request->user()->id,'messages.MessageReceiverId','=',$id)
        ->insert([
            'MessageId' => $message['MessageId'],
            ]);
        return back();
        /*$msg = message::create($messages);

        $data= message::where('id',$msg->MessageId)->first();*/


    }  **/


}
