<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth',['except'=>['store']]);
        
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMessage = Message::get();
        return view('admin/pages/settings/message/index',['dataMessage'=>$dataMessage]);
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
        $validateData = $request->validate([
            'name'     => 'required',
            'subject'  =>'required',
            'email'    => 'required|email',
            'message'  => 'required'
        ]);

            $data = Message::create($validateData);
            if($data){
                session()->flash('SMS_Session','Sended Success');
            }else{
                session()->flash('SMS_Session','Please Tray Agin');
            }
            return back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Message::where('id',$id)->delete();

        if($del){
            session()->flash('SMS_Session','Deleted Success');
            return redirect(url('admin/settings/message'));
        }else{
            session()->flash('SMS_Session','Error In Delete , Please Tray Agin');
            return redirect(url('admin/settings/message'));
        }
        
    }
}