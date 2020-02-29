<?php

namespace App\Http\Controllers\Frontend\Team;

use App\Http\Controllers\Controller;
use App\Repositories\Team\TeamRepository;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected $teamRepository;
    public function __construct(TeamRepository $repository)
    {
        $this->teamRepository = $repository;
    }

    protected $layout = 'frontend.team.';

    public function index()
    {
        $teams = $this->teamRepository->getAll();
        return view($this->layout.'index',compact('teams'));
    }
}
