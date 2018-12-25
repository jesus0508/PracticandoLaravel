<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Trainer;
use Illuminate\Http\Request;
use LaraDex\Http\Requests\StorageTrainerRequest;

class TrainerController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainers=Trainer::all();
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorageTrainerRequest $request)
    {
        //
        $name='';
        if($request->hasFile('imgAvatar')){
            $file=$request->file('imgAvatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/',$name);
        }
        $trainer=new Trainer;
        $trainer->nombre=$request->input('txtNombre');
        $trainer->slug=$request->input('txtSlug');
        $trainer->avatar=$name;
        $trainer->save();
        return redirect()->route('trainers.index')->with('status','Registrado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
        //$trainer=Trainer::find($id);
        return view('trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $trainer->avatar=$name;
            $file->move(public_path().'/img/',$name);
        }
        $trainer->save();
        return redirect()->route('trainers.show',[$trainer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //
        $file_path=public_path().'/img/'.$trainer->avatar;
        \File::delete($file_path);
        $trainer->delete();
        return redirect()->route('trainers.index');
    }
}
