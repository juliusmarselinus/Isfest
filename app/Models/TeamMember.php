<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory, HasUuids; // Pastikan pakai HasUuids jika primary key berupa UUID

    protected $fillable = [
        'team_id',
        'nama_lengkap',
        'no_whatsapp',
        'asal_instansi',
        'ktm_url',
        'is_captain',
    ];

    // Relasi kembali ke Tim (Satu anggota milik satu tim)
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}