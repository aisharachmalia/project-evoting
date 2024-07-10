<?php

// App\Models\VotingPeriode.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingPeriode extends Model
{
    use HasFactory;

    protected $fillable = ['periode'];

    public function kandidat()
    {
        return $this->hasMany(Kandidat::class, 'id_periode');
    }
}

