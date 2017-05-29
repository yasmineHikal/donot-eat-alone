<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Restaurant;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class restaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restaurant.home');
    }
    public function showProfile(Request $request)
    {
        $restaurant=DB::table('restaurants')
            ->join('users','RestaurantManager','=','users.id')
            ->where('users.id',Auth::user()->id)

            ->select('users.*','restaurants.*')->first();

       // dd($restaurant);
        return view('restaurant.profile',compact('restaurant'));
    }

    public function editProfile(Request $request ,$id)
    {
        $restaurant =Restaurant::find($id);

        $restaurant->RestaurantName           = $request['RestaurantName'];
        $restaurant->RestaurantAddress          = $request['RestaurantAddress'];
        $restaurant->RestaurantPhone          = $request['RestaurantPhone'];



        $restaurant->save();

       // $restaurants = $restaurant->all();
        return back();
    }


    /**
     * upload user profile photo................................................................................................
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */






    public function upload(Request $request,$id,User $user)
    {
        $restaurant =Restaurant::find($id);

        //dd($restaurant);
        $pic=$restaurant->RestaurantPhoto;


        if ($request->hasFile('RestaurantPhoto') ) {

            $picName =uploadImage($request->file('RestaurantPhoto'), base_path().'/public/uploads/'.$pic);

            $restaurant->RestaurantPhoto = $picName;


            $restaurant->save();



            return back();
        }

    }




    /**
     * edit user password .......................................................................................................
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editPassword(Request $request, $id)
    {


        $restaurant = User::find($id);
        $restaurant->password =bcrypt($request->password);
        $restaurant->save();

        return back();
    }
}
