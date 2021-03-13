<?php

namespace App\Http\Controllers;

use App\Models\Clips as ModelsClips;
use Illuminate\Http\Request;

class Clips extends Controller
{
    public function get_user_clips(Request $request) {
        $clips = ModelsClips::where('user_id', '=', $request->user_id)->where('clip_status','=','ACTIVE')->paginate(10);
        return json_encode($clips);
    }
}
