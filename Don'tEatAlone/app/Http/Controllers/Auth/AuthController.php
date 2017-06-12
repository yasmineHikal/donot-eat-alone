<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\ActivationService;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    private $firebaseUrl    = 'https://donteatalone-de6b6.firebaseio.com'; //firebase database url
    private $firebaseToken  = 'CrYP02MRAG4uphafrzGNUfJXtadiNkLoASLAhb4r';//database token
    private $currentPath    = 'users/data'; //location to save data



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
    protected $activationService;

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'home';

    public function __construct(ActivationService $activationService)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
    }

    public function authenticated(Request $request, $user)
    {
        if (!$user->activated) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }

    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        abort(404);
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

      $use=  User::create([

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

        //first create firebase object:



        $firebaseObject = new \Firebase\FirebaseLib($this->firebaseUrl,$this->firebaseToken);



        $users   = new \stdClass();
        $users->id= $use->id;
        $users->lat = $data['lat'];
        $users ->long= $data['long'];
        $users ->username=$data['UserName'];
        $users ->email= $data['email'];
        $users ->gender= $data['Gender'];
        $users ->city=$data['UserCity'] ;
        $users ->birthdate= $data['UserBirthDate'];
        $users ->age= $age;



        //$this->currentPath.'/'.$userId ==	https://syam.firebaseio.com/users/data
        $firebaseObject->set($this->currentPath.$users->id ,$users);

            return $use;


    }


}
