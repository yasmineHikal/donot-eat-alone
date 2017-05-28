<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\message;
use Auth;

class messageController extends Controller
{
    //

    public function index(){

        return view('users.messages');
    }

    public function getUserNotifications(Request $request){

        $notifications=message::where('IsRead',0)
          ->where('MessageReceiverId',$request->user()->id)
          ->orderBy('created_at','desc')
            ->get();
       // dd($notifications);

        return response(['data'=>$notifications],200);


    }

    public function getMessages(Request $request){
        $messages=message::where('MessageReceiverId',$request->user()->id)
            ->orderBy('created_at','desc')
            ->get();

        //dd($messages);
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


    }


}
