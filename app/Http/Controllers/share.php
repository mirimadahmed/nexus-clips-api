<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Share as ModelShare;
use Illuminate\Http\Request;


class Share extends Controller
{
    public function shareClip(Request $request){
        $user = new ModelShare();
        $user->user_id = $request->user_id;
        $user->save();
        return json_encode(array('error' => 0, 'user' => $user));
    }
}