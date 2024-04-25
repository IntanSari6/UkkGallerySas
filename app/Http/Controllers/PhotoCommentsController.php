<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoComment ;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class PhotoCommentsController extends Controller
{
    public function storeComment(Request $request, String $id)
{
    $validatedData = $request->validate([
        'isiKomentar' => 'required'
    ]);
    

    if(Auth::check()) {
        $user = Auth::user();
        $comment = new PhotoComment();
        $comment->photoId = $id;
        $comment->isiKomentar = $request->isiKomentar;
        $comment->tanggalKomentar = now(); 
        $comment->userId = auth()->user()->userId;
        $comment->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
    } else {
        return redirect()->back()->with('error', 'Silakan login terlebih dahulu untuk menambahkan komentar');
    }
}
    

}