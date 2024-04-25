<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Like;
use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use App\Models\PhotoComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PhotoDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::join('albums', 'albums.albumId', '=', 'photos.albumId')
        ->where('photos.userId', '=', Auth::user()->userId)
        ->get();
     //    dd($photo);
        $user = User::all();
        $album = Album::all();
        return view('dashboard.data-photo.index', ['photo' => $photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $album = Album::get();
        $photo = Photo::all();
        return view ('dashboard.data-photo.create', compact('album', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $massages = [
            'required' => 'Silahkan isi kolom ini !',
            'max' => 'Tidak boleh lebih dari 100 karakter',
            'image' => 'Anda hanya dapat menambahkan gambar',
        ];

        $request->validate([
            'judulPhoto' => 'required|max:255',
            'deskripsiPhoto' => 'required|max:255',
            'lokasiFile' => 'image|required',
            'albumId' => 'required', 
        ], $massages);
        $tanggal = Carbon::now()->toDateTimeString();
        $photo = new Photo;
        $photo->judulPhoto = $request->judulPhoto;
        $photo->deskripsiPhoto = $request->deskripsiPhoto;
        $photo->lokasiFile = $request->lokasiFile;
        $photo->tanggalUnggah = $tanggal;
        $photo->albumId = $request->albumId;
        $photo['userId'] = auth()->user()->userId;

        if ($request->hasFile('lokasiFile')) {
            $files = $request->file('lokasiFile');
            $path = storage_path('app/public');
            $files_name = 'public' . '/' . date('Ymd') . '-' .
            $files->getClientOriginalName();
            $files->storeAs('public', $files_name);
            $photo->lokasiFile = $files_name;
        }

        $photo->save();

        return redirect('/dashboard/data-photo')->with('success', 'tambah data sukses!!');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $photo = Photo::where('photoId', $id)->first();
        $like = Like::where('photoId', $id)->count();
        $comment = PhotoComment::where('photoId', $id)->get();
        return view('initial-view.detail-photo', compact('photo', 'like', 'comment', 'id'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $photoId)
    {
        $photo = Photo::where('photoId', $photoId)->first();
        $user = User::all();
        $album = Album::get();
        
        // Periksa jika photo ditemukan
        if (!$photo) {
            abort(404); // Tampilkan halaman 404 jika photo tidak ditemukan
        }
    
        return view('/dashboard.data-photo.edit', compact(['photo','album', 'user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $photoId)
{
    // Ambil tanggal saat ini
    $tanggal = Carbon::now()->toDateTimeString();
    
    // Temukan foto berdasarkan photoId
    $photo = Photo::where('photoId', $photoId)->first();
    
    // Perbarui atribut foto dengan data dari request
    $photo->judulPhoto = $request->judulPhoto;
    $photo->deskripsiPhoto = $request->deskripsiPhoto;
    $photo->albumId = $request->albumId;
    
    // Periksa jika lokasiFile ada dalam request
    if ($request->hasFile('lokasiFile')) {
        $file = $request->file('lokasiFile');
        $path = storage_path('app/public');
        $file_name = 'public/' . date('Ymd') . '-' . $file->getClientOriginalName();
        $file->storeAs('public', $file_name);
        $photo->lokasiFile = $file_name;
    }

    // Tidak perlu memperbarui tanggal pembuatan
    // Perbarui atribut 'userId' dengan ID pengguna yang sedang masuk
    $photo->userId = auth()->user()->userId;

    // Simpan perubahan pada foto
    $photo->save();

    // Redirect ke halaman foto-data dengan pesan sukses
    return redirect('/dashboard/data-photo')->with('success', 'Photo telah diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($photoId)
    {
        Photo::destroy($photoId);
        return redirect('/dashboard/data-photo')->with('success','Data Berhasil Dihapus');
    }

    
}
