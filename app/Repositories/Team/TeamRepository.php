<?php


namespace App\Repositories\Team;


use App\Models\Team\Team;
use App\Traits\Database;

class TeamRepository implements TeamInterface
{
   use Database;

    public function __construct(Team $model)
    {
        $this->model = $model;
    }
}
