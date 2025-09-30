<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotes extends Model
{
    /** @use HasFactory<\Database\Factories\UserNotesFactory> */
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'age', 'location', 'job'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function notes()
    {
        return $this->hasMany(Notes::class);
    }

    
}
