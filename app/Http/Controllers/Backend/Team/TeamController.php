<?php

namespace App\Http\Controllers\Backend\Team;

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

    protected $layout = 'backend.team.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->layout.'index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->layout.'form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //technical debt replace requests with clases :)
        $this->validate($request,[
            'name'=>'required|max:255',
            'icon'=>'required'
            ]);

        $this->teamRepository->create($request->only(['name','icon']));

        return redirect()->back()->withInfo('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view($this->layout.'form');
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
        //technical debt replace requests with clases :)
        $this->validate($request,[
            'name'=>'required|max:255',
            'icon'=>'jpg,png'
        ]);

        $this->teamRepository->find($id)->update($request->only(['name','icon']));

        return redirect()->back()->withInfo('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teamRepository->delete($id);

        return  redirect()->back()->withInfo('Deleted Successfully');
    }
}
