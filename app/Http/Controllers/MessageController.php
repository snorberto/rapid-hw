<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    function save(Request $req){
        
        $msg = new Message;
        $msg->name= $req->name;
        $msg->email= $req->email;
        $msg->message= $req->comment;
        $msg->save();
        return redirect('/home');
    }

    function showMessages(){
        $msg = Message::orderBy('created_at','desc')->get();
        return view('layouts.admin.adm_messageResult', ['messages'=>$msg]);
    }
}
