<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Album;
use App\Models\Like;
use App\Models\PhotoComment ;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $photo = Photo::leftJoin('albums', 'albums.albumId', '=', 'photos.albumId')
                    ->withCount('comments')
                    ->select('photos.*', 'albums.namaAlbum')
                    ->get();

        return view('initial-view.home', compact('photo'));
    }

    
    public function gallery(){
        $album = Album::all();
        return view('initial-view.gallery', compact('album'));
    }
    public function detail()
    {
        $jumlahKomentar = PhotoComment::where('photoId', $photoId)->count();
        $likes= Like::get();
        $comment = PhotoComment::get();
        return view('initial-view.detail-photo', compact('like', 'comment', 'jumlahKomentar'));
    }

    public function detail_album($id)
    {
    $photos = Photo::join('albums', 'albums.albumId', '=', 'photos.albumId')
                    ->where('photos.albumId', $id)
                    ->get(['photos.*', 'albums.namaAlbum', 'albums.deskripsi', 'albums.tanggalDibuat']);

    return view('initial-view.detail-album', compact('photos'));
    }


}