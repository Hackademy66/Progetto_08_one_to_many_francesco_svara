<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Http\Requests\SellRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SellController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only('create', 'edit', 'destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sells = Sell::all();
        return view('sell.index', compact('sells'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sell.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SellRequest $request)
    {
        $sell = Sell::create([
            'name' => $request->name,
            'price' => $request->price,
            'cover' => $request->cover ? $request->file('cover')->store('public/covers') : null,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);
        return redirect(route('homepage'))->with('sellCreated', "You have successfully posted the advertisement.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Sell $sell)
    {
        return view('sell.show', compact('sell'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sell $sell)
    {
        if($sell->user_id != Auth::id()){
            return redirect(route('homepage'))->with('accessDenied', 'You are not authorized to perform this operation.');
        }
        return view('sell.edit', compact('sell'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SellRequest $request, Sell $sell)
    {
        if($request->cover){
            $sell->update([
                'name' => $request->name,
                'price' => $request->price,
                'cover' => $request->file('cover')->store('public/covers'),
                'description' => $request->description,
            ]);
        } else {
            $sell->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);

        }

        return redirect(route('homepage'))->with('sellUpdated', "The announcement has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect(route('homepage'))->with('tradeDeleted', "The announcement has been deleted.");
    }
}