<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\About;
use File;

class ServicesController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataServices = Services::get();
        $dataAbout = About::get();
        return view('admin/pages/settings/services/index',['dataServices'=>$dataServices[0],'dataAbout'=>$dataAbout[0]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $validate = $request->validate([
            'img'                  => 'nullable|image|mimes:png,jpg,jpeg',
            'service1'             => 'required',
            'service2'             =>'required',
            'service_definition'   =>'required',
            'services1_progress'   =>'required|max:100',
            'services2_progress'   =>'required|max:100',
            'services3_progress'   =>'required|max:100',
            'services4_progress'   =>'required|max:100',
            
        ]);

        $updete = Services::get()[0];
        
        if($request->hasFile('img')){
            
            file::delete('assets/images/'.$updete->img);

            $img = $request->file('img');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;

            $path = 'assets/images';
            $final = $img->move($path,$newName);

            
            $validate['img'] = $newName;

        }else{
            $validate['img'] = $updete->img;
        }


        $dataUpdate = Services::where('id',$id)->update($validate);
        if($dataUpdate){
            session()->flash('SMS_Session','Updated Success');
        }else{
            session()->flash('SMS_Session','Error in Update , Please Try Agin');
        }
        return redirect(url('admin/settings/services'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}