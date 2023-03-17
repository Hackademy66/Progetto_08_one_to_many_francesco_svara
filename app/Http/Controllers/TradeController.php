<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Trade;
use Illuminate\Http\Request;
use App\Http\Requests\TradeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class TradeController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only('create', 'edit', 'destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trades = Trade::all();
        return view('trade.index', compact('trades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = Agent::all();
        
        return view('trade.create', compact('agents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TradeRequest $request)
    {
        $trade = Trade::create([
            'name' => $request->name,
            'price' => $request->price,
            'cover' => $request->cover ? $request->file('cover')->store('public/covers') : null,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);
        $trade->agents()->attach($request->agent);
        return redirect(route('homepage'))->with('tradeCreated', "You have successfully posted the advertisement.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Trade $trade)
    {
        $agent = Agent::all();

        return view('trade.show', compact('trade', 'agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trade $trade)
    {
        if($trade->user_id != Auth::id()){
            return redirect(route('homepage'))->with('accessDenied', 'You are not authorized to perform this operation.');
        }
        $agents = Agent::all();

        return view('trade.edit', compact('trade', 'agents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TradeRequest $request, Trade $trade)
    {
        if($request->cover){
            $trade->update([
                'name' => $request->name,
                'price' => $request->price,
                'cover' => $request->file('cover')->store('public/covers'),
                'description' => $request->description,
            ]);
        } else {
            $trade->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);
        }
        $trade->agents()->attach($request->agent);
        return redirect(route('homepage'))->with('tradeUpdated', "You have successfully updated the announcement.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trade $trade)
    { 
        foreach($trade->agents as $agent){
            $trade->agents()->detach($agent->id);
        }

        $trade->delete();

        return redirect(route('homepage'))->with('tradeDeleted', "The ad has been deleted.");
    }
}
