<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamStoreRequest;
use App\Http\Requests\TeamUpdateRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teams = Team::all();

        return view('team.index', compact('teams'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('team.create');
    }

    /**
     * @param \App\Http\Requests\TeamStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamStoreRequest $request)
    {
        $team = Team::create($request->validated());

        $request->session()->flash('team.id', $team->id);

        return redirect()->route('team.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Team $team)
    {
        return view('team.show', compact('team'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Team $team)
    {
        return view('team.edit', compact('team'));
    }

    /**
     * @param \App\Http\Requests\TeamUpdateRequest $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamUpdateRequest $request, Team $team)
    {
        $team->update($request->validated());

        $request->session()->flash('team.id', $team->id);

        return redirect()->route('team.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Team $team)
    {
        $team->delete();

        return redirect()->route('team.index');
    }
}
