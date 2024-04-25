<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(String $id){
        $like = Like::where('photoId', $id)->where('userId', auth()->user()->userId)->first();
        if ($like) {
            $like->delete();
            return back();
        } else {
            $tanggal = Carbon::now()->toDateTimeString();
            $like = new Like();
            $like->photoId = $id;
            $like->userId = auth()->user()->userId;
            $like->tanggalLike = $tanggal;
            $like->save();
            return back();
        }
    }
}