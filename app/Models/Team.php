<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function penpos()
    {
        // many to many relationship
        return $this->belongsToMany(Penpos::class, 'penpos_teams', 'penpos_id', 'teams_id');
    }

    protected $fillable = [
        'nama',
        'avatar',
        'koin',
    ];
}
