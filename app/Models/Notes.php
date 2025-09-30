<?php

namespace App\Models;
use App\Models\UserNotes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['title', 'about', 'content', 'user_id'];
    /** @use HasFactory<\Database\Factories\NotesFactory> */
    use HasFactory;

    public function userNotes()
    {
        return $this->belongsTo(UserNotes::class, 'user_id');
    }


}


