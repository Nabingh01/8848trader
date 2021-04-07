<?php

namespace App\Http\Controllers;

use App\Models\AllStudent;
use Illuminate\Http\Request;

class AllStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=AllStudent::all();
        return view('backend.allstudent.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.allstudent.create');
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
            'contact'=>'required',
            'email'=>'required',
            'course'=>'required',
            'country'=>'required',
        ]);
        $students= new AllStudent();
        $students->name=$request->name;
        $students->contact=$request->contact;
        $students->email=$request->email;
        $students->course=$request->course;
        $students->country=$request->country;
        $students->firstinstallment=$request->firstinstallment;
        $students->secondinstallment=$request->secondinstallment;
        $students->thirdinstallment=$request->thirdinstallment;
        $students->fourthinstallment=$request->fourthinstallment;
        $students->save();
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
        $students=AllStudent::find($id);
        return view('backend.allstudent.edit',compact('students'));
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
            'contact'=>'required',
            'email'=>'required',
            'course'=>'required',
            'country'=>'required',
        ]);
        $students=AllStudent::find($id);
        $students->name=$request->name;
        $students->contact=$request->contact;
        $students->email=$request->email;
        $students->course=$request->course;
        $students->country=$request->country;
        $students->firstinstallment=$request->firstinstallment;
        $students->secondinstallment=$request->secondinstallment;
        $students->thirdinstallment=$request->thirdinstallment;
        $students->fourthinstallment=$request->fourthinstallment;
        $students->update();
        $request->session()->flash('message','record saved');
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
        $students=AllStudent::find($id);
        $students->delete();
        $request->session()->flash('message','record saved');
        return redirect()->back();
    }
}
