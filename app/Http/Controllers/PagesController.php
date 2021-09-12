<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\DB;
use App\Post;



class PagesController extends Controller
{
    //
    public function home(){

        return view('visitors_page.home');

    }
    public function contact(){
        return view('visitors_page.contact');
    }
    public function about(){
        return view('visitors_page.about');
    }
    public function store(Request $request){

        /*$this ->validate([
            'email'=>'required',
            'body'=>'required'
        ]);*/

        $contact = new Contact;
        $contact -> email = $request->input('email');
        $contact -> body = $request->input('body');

        $contact->save();

        return redirect('/contact');

       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {   
        
        $posts = DB::table('posts')->paginate(2);

        
       
         return view('visitors_page.blogs')->with('posts',$posts);
    
    }
}
