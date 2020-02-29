<?php

namespace App\Http\Controllers\Backend\Match;

use App\Http\Controllers\Controller;
use App\Repositories\Match\MatchRepository;
use App\Repositories\Team\TeamRepository;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    protected $matchRepository,$layout='backend.match.';

   public function __construct(MatchRepository $matchRepository)
   {
       $this->matchRepository = $matchRepository;
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = $this->matchRepository->getAll();
        return view($this->layout.'index',compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = app(TeamRepository::class)->getAll();

        return view($this->layout.'form',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['batsman_team_id'=>'required','bowling_team_id'=>'required']);

       $this->matchRepository->create($request->all());

       return redirect()->back()->withInfo('Created successfully,Do you want to add more?');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
