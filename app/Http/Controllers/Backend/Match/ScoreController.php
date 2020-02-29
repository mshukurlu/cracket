<?php

namespace App\Http\Controllers\Backend\Match;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    protected $layout = 'backend.score';

    public function index()
    {
        return view($this->layout.'.form');
    }

}
