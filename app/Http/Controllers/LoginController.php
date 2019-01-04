<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    //
    public function index()
    {
        // show the form
        return View::make('login');
    }

    public function fazLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            // 'email' => 'required|email', // make sure the email is an actual email
            'senha' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(Input::except('senha')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'matricula' => Input::get('matricula'),
                'senha' => Input::get('senha')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return Redirect::to('/admin');
                //echo 'SUCCESS!';

            } else {

                // validation not successful, send back to form
                return Redirect::to('/');

            }

        }
    }
}
