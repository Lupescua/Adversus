<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Input as Input;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sends to landing page
            return view('welcome');       
    }

    public function create(){        
    }
    public function step2(Request $request)
    {
        //After user uploads a pic, it redirects him back
        // return view('user.user_create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Uploads the user info
        // if($request->password === $request->password_repeat ){

            
            $user =  new User();

            //   validation
            $this->validate($request, [
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required|email',
                'password' => 'min:3|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:3',
                'phone_number'=>'required',               
                'image' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=250,min_height=250',
            ]);

            if(Input::hasFile('image')){
                $file = Input::file('image');
                $user->image = $file->getClientOriginalName();
                $file->move('img', $file->getClientOriginalName());
            }
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->password = $request->password;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->save();

            event(new Registered($user));
            Auth::guard()->login($user);

            //redirect to show page
            return redirect(action('UserController@show',[$user->id]));
        // }

            //  return redirect(action('UserController@index'));

    }

 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('new_user',compact('user'));

    }

}

?>