<?php

// App\Models\Kandidat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $fillable = ['nama_calon', 'id_periode', 'visi', 'misi', 'image'];

    public function votingPeriode()
    {
        return $this->belongsTo(VotingPeriode::class, 'id_periode');
    }
}


