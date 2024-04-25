<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $album = Album::join('albums', 'albums.albumId', '=', 'albums.albumId')
        // ->where('photos.userId', '=', Auth::user()->userId)
        // ->get();
     //    dd($photo);
        $album = Album::all();
        $user = User::all();
        $photo = Photo::all();
        return view('dashboard.data-album.index', ['album' => $album]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.data-album.create');
    }


    public function store(Request $request)
{
    $message = [
        'required' => 'Silahkan isi kolom ini!',
        'unique' => 'Nama album telah digunakan'
    ];

    $validatedData = $request->validate([
        'namaAlbum' => 'unique:albums|required|max:255', 
        'deskripsi' => 'required|max:255', 
    ], $message);

    $tanggal = Carbon::now()->toDateTimeString();

    $album = new Album;
    $album->namaAlbum = $validatedData['namaAlbum'];
    $album->deskripsi = $validatedData['deskripsi'];

    if (Auth::check()) {
        $album->userId = auth()->user()->userId;
    }

    $album->tanggalDibuat = $tanggal;
    $album->save();

    return redirect('/dashboard/data-album')->with('success', 'Album baru telah ditambahkan!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $albumId)
    {
        $album = Album::where('albumId', $albumId)->first();
        
        if (!$album) {
            abort(404); 
        }
    
        return view('/dashboard.data-album.edit', compact(['album']));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $albumId)
    {
        $tanggal = Carbon::now()->toDateTimeString();
        $album = Album::where('albumId', $albumId)->first();
        $album->namaAlbum = $request->namaAlbum;
        $album->deskripsi = $request->deskripsi;
        
        if (Auth::check()) {
            $album->userId = auth()->user()->userId;
        }
        
        $album->save();
        
        return redirect('/dashboard/data-album')->with('success', 'Album telah diperbarui!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($albumId)
    {
        Album::destroy($albumId);
        return redirect('/dashboard/data-album')->with('success','Data Berhasil Dihapus');
    }
}
