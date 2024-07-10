<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id,','nama', 'nis', 'id_kelas', 'jk', 'status', 'password'];
    public $timestamps = true;
    protected $hidden = ['password'];

    protected function casts(): array
    {
        return[
            'password' => 'hashed',
        ]; 
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'nis');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
