<?php

namespace App\Http\Controllers;

use App\Models\AllCourse;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course =Course::all();
        return view('backend.course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcourse = AllCourse::all();
        return view('backend.course.create',compact('allcourse'));
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
            'fee'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        $course = new Course();
        $course->allcourse_id=$request->allcourse_id;
        $course->fee=$request->fee;
        $course->description=$request->description;
         if($request->hasFile('image')){
             $file=$request->image;
             $newName=time().$file->getClientOriginalName();
             $file->move('course',$newName);
             $course->image='course/'.$newName;
         };
         $course->save();
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
        $course = Course::find($id);
        return view('backend.course.edit',compact('course'));
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
            'fee'=>'required',
            'description'=>'required',
        ]);
        $course = Course::find($id);
        $course->name=$request->name;
        $course->fee=$request->fee;
        $course->description=$request->description;
         if($request->hasFile('image')){
             $file=$request->image;
             $newName=time().$file->getClientOriginalName();
             $file->move('course',$newName);
             $course->image='course/'.$newName;
         };
         $course->update();
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
        $course = Course::find($id);
        $course->delete();
         $request->session()->flash('message','record deleted');
         return redirect()->back();
    }
}
