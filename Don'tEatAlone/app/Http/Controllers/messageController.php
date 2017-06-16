<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\message;
use Auth;
use App\Conversation;
use Illuminate\Support\Facades\DB;

class messageController extends Controller
{


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

  /**
    public function getMessages(Request $request){
        $messages=message::where('MessageReceiverId',$request->user()->id)
            ->orderBy('created_at','desc')
            ->get();

        dd($messages);
        return $messages ;



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
        return $messageSent;



    }

    public function sendMessage(Request $request){

        $attributes=[

            'MessageSenderId' => $request->input('MessageSenderId'),
            'MessageReceiverId'=> $request->input('MessageReceiverId'),
            'MessageContent'=> $request->input('MessageContent'),
            'IsRead'=> 0,

        ];

        $msg = message::create($attributes);

        $data= message::where('id',$msg->MessageId)->first();

        return $data;


    }  **/


}
