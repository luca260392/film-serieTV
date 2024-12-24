<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TvSeries extends Model
{
    use HasFactory;

    protected $table = 'tv_series'; // Nome della tabella nel database

    // Specifico i campi che possono essere popolati
    protected $fillable = ['title', 'genre', 'release_year', 'director', 'plot', 'poster_image'];
}
