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

    public function inventory_kartu()
    {
        // many to many relationship
        return $this->belongsToMany(Kartu::class, 'teams_kartus', 'teams_id', 'kartus_id')
            ->withPivot('jam', 'sold', 'id');
    }

    public function inventory_clue()
    {
        // many to many relationship
        return $this->belongsToMany(Clue::class, 'inventory_clue', 'teams_id', 'clues_id')
            ->withPivot('id');
    }

    public function toko_kartu()
    {
        // many to many relationship
        return $this->belongsToMany(Kartu::class, 'buy_kartus', 'teams_id', 'kartus_id')
            ->withPivot('stock')
            // Biar loopingnya enak
            ->orderby('kartus_id', 'asc');
    }

    protected $fillable = [
        'nama',
        'avatar',
        'koin',
    ];
}
