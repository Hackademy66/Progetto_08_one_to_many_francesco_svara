<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use App\Models\Agent;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('agent.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if($agent->user_id != Auth::id()){
            return redirect(route('homepage'))->with('accessDenied', 'You are not authorized to perform this operation.');
        }
        $sells = Sell::all();
        $trades = Trade::all();
        
        return view('agent.create', compact('sells', 'trades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agent = Agent::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'cover' => $request->cover ? $request->file('cover')->store('public/covers') : null,
            'email' => $request->email,
        ]);
        $agent->sells()->attach($request->sell);
        $agent->trades()->attach($request->trade);
        return redirect(route('homepage'))->with('agentCreated', "You have successfully published an agent profile.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        $sell = Sell::all();
        $trade = Trade::all();

        return view('agent.show', compact('agent', 'sell', 'trade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        if($agent->user_id != Auth::id()){
            return redirect(route('homepage'))->with('accessDenied', 'You are not authorized to perform this operation.');
        }
        $sells = Sell::all();
        $trades = Trade::all();

        return view('agent.edit', compact('agent', 'sells', 'trades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        if($request->cover){
            $agent->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'cover' => $request->file('cover')->store('public/covers'),
                'email' => $request->email,
            ]);
        } else {
            $agent->update([
                'name' => $request->name,
                'phone' => $request->phone,
            ]);
        }
        $agent->sells()->attach($request->sell);
        $agent->trades()->attach($request->trade);
        return redirect(route('homepage'))->with('agentUpdated', "You have successfully updated the agent profile.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        foreach($agent->sells as $sell){
            $agent->sells()->detach($sell_id);
        }

        foreach($agent->trades as $trade){
            $agent->trades()->detach($trade_id);
        }

        $agent->delete();

        return redirect(route('homepage'))->with('agentDeleted', "The agent profile has been deleted.");
    }
}
