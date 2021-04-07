<?php

namespace App\Http\Controllers;

use App\Models\FourthWeek;
use Illuminate\Http\Request;

class FourthweekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fourthweek = FourthWeek::all();
        return view('frontend.pages.forex.fourthweek',compact('fourthweek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.forex.fourthweek');
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
        $fourthweek = new FourthWeek();
        $fourthweek->name=$request->name;
        $fourthweek->description=$request->description;
        $fourthweek->save();
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
        $fourthweek = FourthWeek::find($id);
        return view('backend.forex.fourthweekedit',compact('fourthweek'));
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
        $fourthweek = FourthWeek::find($id);
        $fourthweek->name=$request->name;
        $fourthweek->description=$request->description;
        $fourthweek->update();
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
        $fourthweek = FourthWeek::find($id);
        $fourthweek->delete();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }
}
