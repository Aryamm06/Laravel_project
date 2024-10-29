<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Login;

use Session;
use Auth;




class PekkaController extends Controller
{
    public function showPage()
    {
        return view('navbar');
    }


    public function create()
    {
        return view('Contact.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
            'Email' => 'required|email',
            'Number' =>'required',
            'Query' => 'required',
        ]);

        // Save the data to the database
        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Data saved successfully.');
    }

    
    public function showContacts() {
        // Fetch contacts from the database
        $contacts = Contact::all(); // assuming you have a Contact model
        // Pass contacts data to the view
        return view('auth.contact_enquiry', ['contacts' => $contacts]);


    }


// add_press_release

public function creates()
{
    return view('auth.add_services');
}


function adddata(Request $req)
    {
           $menus=new Service; 
            if($req->file('images')){  
            $file= $req->file('images');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/img'), $filename);
            $data['images']= $filename;

            $menus->title=$req->title; 
            $menus->description=$req->description;
             
             $menus->images=$filename;
         $menus->save();                //inserting data to db
        return redirect('list_add'); 

        }     
            //list path name
    }

    function listnew()
    {
        $service=Service::all();  
        return view('auth.list-add',['services'=>$service]); 
      
    }

    function list_index()
    {
        $service=Service::all();  
        return view('index',['services'=>$service]); 
      
    }


//    ...................

// update

function showdata($id)
{
    $service=Service::find($id);
    return view('auth.edit_service',['service'=>$service]);
    //here edits edits page view page name
    //here 'data' is key
}


public function update(Request $req)
{
    $service = Service::find($req->id);

   
    if($req->file('images')){  
        $file= $req->file('images');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/img'), $filename);
        $service['images']= $filename;

        $service->title=$req->title;
        $service->description=$req->description;
        
        $service->images=$filename;
        $service->save();             
    return redirect('list_add');
    }
}

// .............

// delete

function delete($id)
{
    $service=Service::find($id);
    $service->delete($id);
    return redirect('list_add');
}

// ..................

// .......Login.......
    
    // Show the login form
    
  


    public function login()
    {
        return view("auth.login");

    }
    

    function loginUser(Request $request)
    {
         $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5']);

         $user=Login::where('email','=',$request->email)->first();
         if($user)
         {
            if(Login::where('password','=',$request->password))

            {

                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else
            {
                return back()->with('fail','This password is not match');
            }
        }
        else
         {
            return back()->with('fail','This email is not registered');
         }
    }


    
    public function dashboard()
    {
        
        $data=array();
        if(Session::has('loginId'))
        {
            $data=Login::where('id','=',Session::get('loginId'))->first();
            return view('auth.dashboard',compact('data'));
        }

        
    }
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('/');
        }
    }
//    ............................ 
}