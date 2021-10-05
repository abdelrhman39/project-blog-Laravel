<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use File;
class PortfolioController extends Controller
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
        $dataPortfolio = Portfolio::get();
        return view('admin/pages/settings/portfolio/index',['dataPortfolio'=>$dataPortfolio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages/settings/portfolio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'work_name'         => 'required',
            'description_work'  =>'required',
            'img'               => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('img')){
            $img = $request->file('img');
            $extension = $img->extension();
            $newName = uniqid('').date('d.y.m.s.m').'.'.$extension;
            $path = 'assets/images';
            $img->move($path,$newName);
            $validateData['img'] = $newName;
            $data = Portfolio::create($validateData);
            return redirect(url('admin/settings/portfolio'));
        }
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
        $dataEdit = Portfolio::findorfail($id);
        return view('admin/pages/settings/portfolio/edit',['dataEdit'=>$dataEdit]);
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
            'img'               => 'nullable|image|mimes:png,jpg,jpeg',
            'work_name'         => 'required',
            'description_work'  =>'required'
        ]);

        $updete = Portfolio::get()[0];
        
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


        $dataUpdate = Portfolio::where('id',$id)->update($validate);
        if($dataUpdate){
            session()->flash('SMS_Session','Updated Success');
        }else{
            session()->flash('SMS_Session','Error in Update , Please Try Agin');
        }
        return redirect(url('admin/settings/portfolio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_Del = Portfolio::findorfail($id);

       file::delete('assets/images/'.$id_Del->img);

        $deleteSMS = Portfolio::where('id',$id)->delete();
        if($deleteSMS){
            session()->flash('SMS_Session','Deleted Success');
        }else{
            session()->flash('SMS_Session','Error in Delete , Please Try Agin');
        }
        return redirect(url('admin/settings/portfolio'));
    }
}