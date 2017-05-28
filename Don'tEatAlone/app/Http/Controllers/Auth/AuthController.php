<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'home';


    public function __construct()
    {
      $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'UserName' => 'required|max:70|min:3',
            'email' => 'required|email|min:10|max:255|unique:users',
            'password' => 'required|min:6|confirmed',

        ]);
    }


    protected function create(array $data)
    {

     return  User::create([
            'UserName' => $data['UserName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
           // 'Gender' => $data['Gender'],
           // 'UserBirthDate' => $data['UserBirthDate'],

             ]);


    }


}
