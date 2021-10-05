<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Post;
use App\Models\About;
use App\Models\Message;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Services;

class indexController extends Controller
{
    public function index()
    {
        $dataHed    = Header::get()[0];
        $Post      = Post::paginate(8);
        $About     = About::get()[0];
        $Message   = Message::get();
        $Contact   = Contact::get()[0];
        $Portfolio = Portfolio::get();
        $Services  = Services::get()[0];

        return view('index',[
            'dataHed'=> $dataHed,'Post'=> $Post,'About'=> $About,'Message'=> $Message,'Contact'=> $Contact,'Portfolio' => $Portfolio,'Services'=> $Services,
        ]);
        

    }
}