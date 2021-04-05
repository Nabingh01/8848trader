<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = Resource::all();
        return view('backend.teachingresources.index',compact('resource'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teachingresources.create');
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
            'period'=>'required',
            'description'=>'required',
            'file'=>'required', 
        ]);
        $resource = new Resource();
        $resource->name=$request->name;
        $resource->period=$request->period;
        $resource->description=$request->description;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().$file->getClientOriginalName();
            $file->move('resource',$newName);
            $resource->image='resource/'.$newName;
        };
        if($request->hasFile('file')){
            $file=$request->file;
            $newName=time().$file->getClientOriginalName();
            $file->move('resourcefile',$newName);
            $resource->file='resourcefile/'.$newName;
        };
        $resource->save();
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
        $resource = Resource::find($id);
        return view('backend.teachingresources.edit',compact('resource'));
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
            'period'=>'required',
            'description'=>'required',
        ]);
        $resource = Resource::find($id);
        $resource->name=$request->name;
        $resource->period=$request->period;
        $resource->description=$request->description;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().$file->getClientOriginalName();
            $file->move('resource',$newName);
            $resource->image='resource/'.$newName;
        };
        if($request->hasFile('file')){
            $file=$request->file;
            $newName=time().$file->getClientOriginalName();
            $file->move('resourcefile',$newName);
            $resource->file='resourcefile/'.$newName;
        };
        $resource->update();
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
        $resource = Resource::find($id);
        $resource->delete();
        $request->session()->flash('message','record updated');
        return redirect()->back();
    }
}
