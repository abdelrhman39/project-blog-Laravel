<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\Header;

class headerController extends Controller
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
        $dataHaeder = Header::get();
        return view('admin/pages/settings/header/index',['dataHaeder'=>$dataHaeder[0]]);
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
            'company_name'  => 'required',
            'special1'      =>'required',
            'special2'      =>'required',
            'brief_summary' =>'required',
            'img'           => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        $updete = Header::get()[0];
        
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


        $dataUpdate = Header::where('id',$id)->update($validate);
        if($dataUpdate){
            session()->flash('SMS_Session','Updated Success');
        }else{
            session()->flash('SMS_Session','Error in Update , Please Try Agin');
        }
        return redirect(url('admin/settings/header'));
    }

    
}