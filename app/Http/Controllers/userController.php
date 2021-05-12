<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function saveUser(Request $req){
        
        $usr = new User;
        $usr->name= $req->name;
        $usr->email= $req->email;
        $usr->password= Hash::make($req->password);
        $usr->is_admin=$req->is_admin;
        $usr->save();
        return redirect('adm_getUsersResult');
    }

    function showUsers(){
        $msg = User::orderBy('id','asc')->get();
        return view('layouts.admin.adm_getUsersResult', ['messages'=>$msg]);
    }

    function deleteUser($id){
        $data=User::find($id);
        $data->delete();
        return redirect('adm_getUsersResult');
    }

    function showIndividualUser($id){

        $data= User::find($id);
        return view('layouts.admin.adm_editUsers', ["user_details" => $data]);
    }

    function updateIndividualUser(Request $req){
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->is_admin=$req->is_admin;
        $data->save();
        return redirect('adm_getUsersResult');
        //return $req->input();
    }
}
