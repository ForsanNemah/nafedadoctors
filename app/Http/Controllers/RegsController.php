<?php

namespace App\Http\Controllers;

use App\Models\Regs;
use Illuminate\Http\Request;
use DB;

class RegsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $results = DB::select('select * from study_orders');
       // return $results; 

       return view('admin.html.tables')->with('results',$results);


        //
        //return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'create';
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
     * @param  \App\Models\Regs  $regs
     * @return \Illuminate\Http\Response
     */
    public function show(Regs $regs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regs  $regs
     * @return \Illuminate\Http\Response
     */
    public function edit(Regs $regs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regs  $regs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regs $regs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regs  $regs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regs $regs)
    {
        //
    }
}
