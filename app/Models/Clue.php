<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clue extends Model
{
    use HasFactory;
    protected $table = 'clues';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function inventory_clue()
    {
        // many to many relationship
        return $this->belongsToMany(Team::class, 'inventory_clue', 'clues_id', 'teams_id')
            ->withPivot('id');
    }
}
