<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\About;
class AboutController extends Controller
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
        $dataAbout = About::get();
        return view('admin/pages/settings/about/index',['dataAbout'=>$dataAbout[0]]);
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
            'img'                 => 'nullable|image|mimes:png,jpg,jpeg',
            'special1'            => 'required',
            'icon_special1'       =>'nullable|image|mimes:png,jpg,jpeg',
            'definition_special1'  =>'required',
            'special2'            => 'required',
            'icon_special2'       =>'nullable|image|mimes:png,jpg,jpeg',
            'definition_special2'  =>'required',
            'special3'            => 'required',
            'icon_special3'       =>'nullable|image|mimes:png,jpg,jpeg',
            'definition_special3'  =>'required',
            'special4'            => 'required',
            'icon_special4'       =>'nullable|image|mimes:png,jpg,jpeg',
            'definition_special4'  =>'required',
            
        ]);

        $updete = About::get()[0];
        
        //-- Img --//
        if ($request->hasFile('img')) {
            file::delete('assets/images/'.$updete->img);

            $img = $request->file('img');
            $extension = $img->extension();
            $newName= uniqid('', true).'.'.$extension;

            $path = 'assets/images';
            $final = $img->move($path, $newName);

            
            $validate['img'] = $newName;
        } else {
            $validate['img'] = $updete->img;
        }

        //-- icon_special1 --//

        if ($request->hasFile('icon_special1')) {
            file::delete('assets/images/'.$updete->icon_special1);

            $icon_special1 = $request->file('icon_special1');
            $extension = $icon_special1->extension();
            $newName= uniqid('', true).'.'.$extension;

            $path = 'assets/images';
            $final = $icon_special1->move($path, $newName);

            
            $validate['icon_special1'] = $newName;
        } else {
            $validate['icon_special1'] = $updete->icon_special1;
        }


        //-- icon_special2 --//

        if ($request->hasFile('icon_special2')) {
            file::delete('assets/images/'.$updete->icon_special2);

            $img = $request->file('icon_special2');
            $extension = $img->extension();
            $newName= uniqid('', true).'.'.$extension;

            $path = 'assets/images';
            $final = $img->move($path, $newName);

            
            $validate['icon_special2'] = $newName;
        } else {
            $validate['icon_special2'] = $updete->icon_special2;
        }


        //-- icon_special3 --//

        if ($request->hasFile('icon_special3')) {
            file::delete('assets/images/'.$updete->icon_special3);

            $img = $request->file('icon_special3');
            $extension = $img->extension();
            $newName= uniqid('', true).'.'.$extension;

            $path = 'assets/images';
            $final = $img->move($path, $newName);

            
            $validate['icon_special3'] = $newName;
        } else {
            $validate['icon_special3'] = $updete->icon_special3;
        }

        //-- icon_special4 --//

        if ($request->hasFile('icon_special4')) {
            file::delete('assets/images/'.$updete->icon_special4);

            $img = $request->file('icon_special4');
            $extension = $img->extension();
            $newName= uniqid('', true).'.'.$extension;

            $path = 'assets/images';
            $final = $img->move($path, $newName);

            
            $validate['icon_special4'] = $newName;
        } else {
            $validate['icon_special4'] = $updete->icon_special4;
        }




        $dataUpdate = About::where('id', $id)->update($validate);
        if ($dataUpdate) {
            session()->flash('SMS_Session', 'Updated Success');
        } else {
            session()->flash('SMS_Session', 'Error in Update , Please Try Agin');
        }
        return redirect(url('admin/settings/about'));
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