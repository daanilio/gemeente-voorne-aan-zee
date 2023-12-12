<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klacht extends Model
{
    use HasFactory;

    protected $table = 'klachten';

    protected $fillable = [
        'naam',
        'email',
        'klacht',
        'locatie',
        'foto',
    ];
}
