<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use HasFactory;

    protected $fillable = ['id_siswa', 'id_kandidat', 'waktu_vote'];
    public $timestamps = true;
}
