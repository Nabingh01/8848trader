<?php

namespace App\Http\Controllers;

use App\Models\SecondWeek;
use Illuminate\Http\Request;

class SecondWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secondweek = SecondWeek::all();
        return view('frontend.pages.forex.secondweek',compact('secondweek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.forex.secondweek');
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
        $firstweek = new SecondWeek();
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
        $secondweek = SecondWeek::find($id);
        return view('backend.forex.secondweekedit',compact('secondweek'));

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
        $secondweek = SecondWeek::find($id);
        $secondweek->name=$request->name;
        $secondweek->description=$request->description;
        $secondweek->update();
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
        $secondweek = SecondWeek::find($id);
        $secondweek->delete();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }
}
