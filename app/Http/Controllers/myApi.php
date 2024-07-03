<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class myApi extends Controller
{
    public function getData($id , ){

        $finder = users::FindOrFail($id);
        if($pass == 12345){
        return $finder;
        }
        else{
            abort(404, 'Page not found');

        }
    }
}
