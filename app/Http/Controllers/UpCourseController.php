<?php

namespace App\Http\Controllers;

use App\Models\AllCourse;
use App\Models\Course;
use App\Models\UpCourse;
use Illuminate\Http\Request;

class UpCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upcourse =UpCourse::all();
        return view('backend.upcommingclasses.index',compact('upcourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course=Course::all();
        return view('backend.upcommingclasses.create',compact('course'));
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
             'date'=>'required',
         ]);
         $upcourse = new UpCourse();
         $upcourse->allcourse_id=$request->allcourse_id;
         $upcourse->date=$request->date;
          $upcourse->save();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upcourse = UpCourse::find($id);
        return view('backend.upcommingclasses.edit',compact('upcourse'));
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
             'up_date'=>'required',
         ]);
         $upcourse =  UpCourse::find($id);
         $upcourse->allcourse_id=$request->allcourse_id;
         $upcourse->date=$request->date;
          $upcourse->update();
          $request->session()->flash('message','record updated');
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request, $id)
    {
        $upcourse =  UpCourse::find($id);
        $upcourse->delete();
          $request->session()->flash('message','record updated');
          return redirect()->back();
    }
}
