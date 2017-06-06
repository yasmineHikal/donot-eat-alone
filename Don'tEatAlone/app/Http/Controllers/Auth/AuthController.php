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
            'UserName' => 'required|max:70|min:3|string|alpha',
            'email' => 'required|email|min:10|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'Gender' => 'required',
            'UserCity' => 'required',
            'UserBirthDate' => 'required',

        ]);
    }


    protected function create(array $data)
    {
        $dateOfBirth =$data['UserBirthDate'];
        $today = date("y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $age=$diff->format('%y');

     return  User::create([

            'UserName' => $data['UserName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'UserLongitude'=>$data['long'],
            'UserLatitude'=>$data['lat'],
            'Gender' => $data['Gender'],
            'UserCity' => $data['UserCity'],

            'UserBirthDate' => $data['UserBirthDate'],
             'UserAge'=>$age

             ]);


    }


}
