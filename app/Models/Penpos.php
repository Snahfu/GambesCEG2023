<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penpos extends Model
{
    use HasFactory;
    protected $table = 'penpos';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function team()
    {
        // many to many relationship
        return $this->belongsToMany(Team::class, 'penpos_teams', 'penpos_id', 'teams_id');
    }

    protected $fillable = [
        'nama',
        'deskripsi',
        'tipe',
        'status'
    ];
}
