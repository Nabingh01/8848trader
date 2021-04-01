<?php

namespace App\Http\Controllers;

use App\Models\AllCourse;
use App\Models\Apply;
use Illuminate\Http\Request;

class AllCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcourse =AllCourse::all();
        return view('backend.allcourse.index',compact('allcourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.allcourse.create');
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
        ]);
        $allcourse =new AllCourse();
        $allcourse->name=$request->name;
         $allcourse->save();
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
        $allcourse = AllCourse::find($id);
        return view('backend.allcourse.edit',compact('allcourse'));
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
        ]);
        $allcourse =  AllCourse::find($id);
        $allcourse->name=$request->name;
         $allcourse->update();
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
        $allcourse = AllCourse::find($id);
        $allcourse->delete();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }
}
