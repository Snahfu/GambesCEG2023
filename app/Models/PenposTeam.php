<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PenposTeam extends Pivot
{
    use HasFactory;
    protected $table = 'penpos_teams';
    protected $dates = ['jam'];
    public $timestamps = false;

    protected $fillable = [
        'penpos_id',
        'teams_id',
        'hasil'
    ];
}
