<?php

namespace App\Models\Match;

use App\Models\Team\Team;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['batsman_team_id','bowler_team_id'];

    public function bowler()
    {
        return $this->hasMany(Bowler::class);
    }

    public function batsman()
    {
        return $this->hasMany(Batsman::class);
    }

    public function batsman_team()
    {
        return $this->belongsTo(Team::class,'batsman_team_id','id');
    }

    public function bowler_team()
    {
        return $this->belongsTo(Team::class,'bowler_team_id','id');
    }
}
