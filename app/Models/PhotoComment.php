<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Photo;


class PhotoComment extends Model
{
    use HasFactory;

    protected $table = 'photocomments';
    protected $primaryKey = 'commentId';

    protected $fillable = [
        'isiKomentar',
        'tanggalKomentar',
        'photoId',
        'userId',
    ];

    protected $guarded = ['commentId'];

    protected $dates = ['tanggalKomentar'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photoId');
    }
}