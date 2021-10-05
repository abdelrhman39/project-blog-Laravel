<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\role;

class UserController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth',['except'=>['login']]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::select('users.*','roles.title')->join('roles','users.role_id','=','roles.id')->get();
        
        return view('admin/pages/users/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = role::select()->get();
        return view('admin/pages/users/add_user',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaidate = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'role_id'  => 'required|regex:([1-2])'
        ]); 

        
        $vaidate['password'] = bcrypt($vaidate['password']);

        User::create($vaidate);
        
        return redirect(url('admin/User'));
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
        $data = User::findorfail($id);
        $dataR = role::get();

       return view('admin/pages/users/edit',['data'=>$data,'roles'=>$dataR]);
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
        $data = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'role_id'    => 'required'
        ]);
        User::where('id',$id)->update($data);
        return redirect(url('admin/User'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect(url('admin/User'));
    }


    public function login(request $request){

        //dd('login');
        $vaidate = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(auth()->attempt($vaidate,false)){

            if(auth()->user()->role_id == 1){
                session()->put('user',$vaidate);
                return redirect(url('admin/post'));
            }else{
                session()->flash('SMS_Session','you are not Admin');
                return redirect(url('admin/logOut'));
            }
            
        }else{
            session()->flash('SMS_Session','Plase Check The Email and Password');
            return redirect(url('admin/login'));
        }

    }

    public function logOut(){
        auth()->logout();

        return redirect(url('admin/login'));
    }
    
}