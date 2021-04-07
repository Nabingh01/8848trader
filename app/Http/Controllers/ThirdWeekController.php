<?php

namespace App\Http\Controllers;

use App\Models\ThirdWeek;
use Illuminate\Http\Request;

class ThirdWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thirdweek = ThirdWeek::all();
        return view('frontend.pages.forex.thirdweek',compact('thirdweek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.forex.thirdweek');
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
        $thirdweek = new ThirdWeek();
        $thirdweek->name=$request->name;
        $thirdweek->description=$request->description;
        $thirdweek->save();
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
        $thirdweek = ThirdWeek::find($id);
        return view('backend.forex.thirdweekedit',compact('thirdweek'));
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
        $thirdweek = ThirdWeek::find($id);
        $thirdweek->name=$request->name;
        $thirdweek->description=$request->description;
        $thirdweek->update();
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
        $thirdweek = ThirdWeek::find($id);
        $thirdweek->delete();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }
}
