<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listvideo;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function putVideo(Request $request){
       
        $input = $request->all();
        $url=$input['url'];
        $thumbnail=$input['thumbnail'];
        $listVideo=new listvideo;
        $listVideo->url=$url;
        $listVideo->thumbnail=$thumbnail;
        $listVideo->save();
        return response()->json([
            "message" => "thanh công "
        ], 201);
        
    }
    public function getVideo(Request $request){
        // $listVideo=listvideo::all();
        // return $listVideo;

        $listVideo = DB::table('listvideos')
        ->select('url','thumbnail','id')
        ->distinct()
        ->orderByRaw('created_at DESC')
        ->paginate(20);
       
        return $listVideo;
        
    }
   
}
