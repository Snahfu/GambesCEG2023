<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    protected $table = 'kartus';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function inventory_kartu()
    {
        // many to many relationship
        return $this->belongsToMany(Kartu::class, 'teams_kartus', 'kartus_id', 'teams_id')
            ->withPivot('jam', 'sold', 'id');
    }

    public function toko_kartu()
    {
        // many to many relationship
        return $this->belongsToMany(Kartu::class, 'buy_kartus', 'kartus_id', 'teams_id')
            ->withPivot('stock')
            // Biar loopingnya enak
            ->orderby('kartus_id', 'asc');
    }
}
