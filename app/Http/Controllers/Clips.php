<?php

namespace App\Http\Controllers;

use App\Models\Clips as ModelsClips;
use App\Models\Session as SessionUser;
use Illuminate\Http\Request;

class Clips extends Controller
{
    public function get_user_clips(Request $request) {
        $clips = ModelsClips::where('user_id', '=', $request->user_id)->where('clip_status','=','ACTIVE')->orderBy('created_at', 'DESC')->paginate(10);
        if($request->page == 1){
            $user = new SessionUser();
            $user->user_id = $request->user_id;
            $user->save();
            return json_encode($clips);
        }else{
            return json_encode($clips);
        }
        
    }
}
