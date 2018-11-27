<?php

namespace App\Http\Controllers;

use App\Clocking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClockingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clockings = DB::table('checkinout')
                    ->orderby('checktime', 'DESC')
                    ->whereDate('checktime', Carbon::today())
                    ->get();

        return view('clocking.index', ['clockings' => $clockings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clocking  $clocking
     * @return \Illuminate\Http\Response
     */
    public function show(Clocking $clocking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clocking  $clocking
     * @return \Illuminate\Http\Response
     */
    public function edit(Clocking $clocking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clocking  $clocking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clocking $clocking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clocking  $clocking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clocking $clocking)
    {
        //
    }
}
