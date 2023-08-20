<?php

namespace App\Http\Controllers;
use App\Models\Board;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $myevent = $request->myevent;
        $boards = Board::get();
        return view('boards.index',[
            'boards' => $boards,
            'myevent' => $myevent
        ]);
    }

    public function viewTeamBoard(Request $request) {
        $myevent = $request->myevent;
        $boards = Board::get();
        return view('boards.team',[
            'boards' => $boards,
            'myevent' => $myevent
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
