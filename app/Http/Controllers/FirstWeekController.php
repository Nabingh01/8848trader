<?php

namespace App\Http\Controllers;

use App\Models\FirstWeek;
use App\Models\FourthWeek;
use Illuminate\Http\Request;

class FirstWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstweek =FirstWeek::all();
        return view('frontend.pages.forex.firstweek',compact('firstweek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.forex.firstweek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'description'=>'required', 
        ]);
        $firstweek = new FirstWeek();
        $firstweek->name=$request->name;
        $firstweek->description=$request->description;
        $firstweek->save();
        $request->session()->flash('message','record saved');
        return redirect()->back();
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
        $firstweek = FirstWeek::find($id);
        return view('backend.forex.firstweekedit',compact('firstweek'));
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
        $data=$request->validate([
            'name'=>'required',
            'description'=>'required', 
        ]);
        $firstweek = FirstWeek::find($id);
        $firstweek->name=$request->name;
        $firstweek->description=$request->description;
        $firstweek->update();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $firstweek = FirstWeek::find($id);
        $firstweek->delete();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }
}
