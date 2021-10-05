<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Message;
use File;
class PostsController extends Controller
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
        $posts = Post::get();
        $users = User::get();
        $messages = Message::get();
        return view('admin.index',['data'=>$posts,'users'=>$users,'messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::get();
        return view('admin.index',['data'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validateData = $request->validate([
            'name'=> 'required|regex:([A-Za-z])',
            'content'=>'required|min:100',
            'img'=> 'required|image|mimes:png,jpg,jpeg,gif'
        ]);

        $img = $request->file('img');
        $extension = $img->extension();
        $newName= uniqid('',true).'.'.$extension;

        $path = 'assets/images';
        $final = $img->move($path,$newName);

        
        $validateData['img'] = $newName;

        // $validateData['img'] = rand(1,12).'.jpg';
    
        $data = Post::create($validateData);
        if($data){
            session()->flash('SMS_Session','Added Post Success');
        }else{
            session()->flash('SMS_Session','Error in Create Post , Please Try Agin');
        }
        return redirect(url('admin/post'));
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
        $DataEdit = Post::findorfail($id);
        return view('admin.edit_post',['data'=>$DataEdit]);
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
            'name'=> 'required',
            'content'=>'required',
            'img'=> 'nullable|image|mimes:png,jpg,jpeg,gif'
        ]);

        $id_updete = Post::findorfail($id);
        if($request->hasFile('img')){
            
            file::delete('assets/images/'.$id_updete->img);

            $img = $request->file('img');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;

            $path = 'assets/images';
            $final = $img->move($path,$newName);

            
            $validate['img'] = $newName;

        }else{
            $validate['img'] = $id_updete->img;
        }


        $dataUpdate = Post::where('id',$id)->update($validate);
        if($dataUpdate){
            session()->flash('SMS_Session','Updated Success');
        }else{
            session()->flash('SMS_Session','Error in Update , Please Try Agin');
        }
        return redirect(url('admin/post'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_Del = Post::findorfail($id);

       file::delete('assets/images/'.$id_Del->img);

        $deleteSMS = Post::where('id',$id)->delete();
        if($deleteSMS){
            session()->flash('SMS_Session','Deleted Success');
        }else{
            session()->flash('SMS_Session','Error in Delete , Please Try Agin');
        }
        return redirect(url('admin/post'));
    }
}