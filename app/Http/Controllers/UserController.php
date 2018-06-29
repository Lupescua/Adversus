<?php

namespace App\Http\Controllers;

use App\Experience;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Input as Input;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    public function step2(Request $request)
    {

        return view('user.user_create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->agree_to_terms != true){
            $user =  new User();
            $user->name = $request->name;
            $user->password = $request->pass;
            $user->email = $request->email;
            $user->adress_country = $request->adress_country;
            $user->adress_city = $request->adress_city;
            $user->adress_state = $request->adress_state;
            $user->adress_street = $request->adress_street;
            $user->adress_zip = $request->adress_zip;
            $user->prefered_language = $request->prefered_language;
            $user->user_tags = $request->user_tags;
            if(Input::hasFile('photo')){
                $file = Input::file('photo');
                $user->photo = $file->getClientOriginalName();
                $file->move('img', $file->getClientOriginalName());
            }
            $user->save();

            event(new Registered($user));
            Auth::guard()->login($user);

            //redirect to show page
            return redirect(action('UserController@show',[$user->id]));
        }
            return redirect(action('UserController@index'));

    }


}

?>