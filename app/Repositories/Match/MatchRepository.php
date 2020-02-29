<?php


namespace App\Repositories\Match;


use App\Models\Match\Match;
use App\Repositories\Match\MatchInterface;
use App\Traits\Database;

class MatchRepository implements MatchInterface
{
   use Database;

    public function __construct(Match $model)
    {
        $this->model = $model;
    }
}
