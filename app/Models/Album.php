<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';
    protected $primaryKey = 'albumId';

    protected $fillable = ['album_name', 'description', 'date_created', 'userId'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function foto(){
        return $this->hasMany(Photo::class);
    }
}
