<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class myApi extends Controller
{
    public function getData($id , $pass){

        $finder = users::FindOrFail($id);
        if($pass == 12345){
        return $finder;
        }
        else{
            abort(404, 'Page not found');

        }
    }
    

    public function postData(Request $requset){
        $data = new users;
        $data->name = $requset->username;
        $data->email = $requset->email;
        $data->password = $requset->password;
        $data->save();

       // return ["username"=> $userName , "password"=>$password];
    }


}
