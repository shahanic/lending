<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function saveUser(Request $request){
        if($request->id){
            $new = User::find($request->id);
        }else{
            $new = new User;
        }
        $new = new User;
        $new->name = $request->name;
        $new->course = $request->course;
        $res = $new->save();
        return $res;
    }
    public function getUsers(){
        return User::all();
    }

    public function deleteStudent(Request $request){
       User::where('id', $request->id)->delete();
        return 1;
    }
}
