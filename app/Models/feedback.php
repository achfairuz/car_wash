<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $fillable = [
        'name', 'email', 'phonenumber', 'subject', 'isi'
    ];
    use HasFactory;
}
