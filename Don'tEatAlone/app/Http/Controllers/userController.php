<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\User as name;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


         return view('users.home');
    }


    public function navBarNotification()
    {
        $myId= Auth::user()->id;
        $numNotification=DB::table('notifications')->where('NotificationToId1','=',$myId)->select('*')->count();

        // dd($notifications);

        return $numNotification;
    }

     public function navBarMessage()
    {
        $myId= Auth::user()->id;
        $numMessages=DB::table('messages')->where('MessageReceiverId',$myId)->select('*')->count();

        // dd($notifications);

        return $numMessages;
    }




    //----------------------------------------------//
    //------------search partner -------------------//
    //----------------------------------------------//


    public function findPartner(Request $request, User $user)
    {
        $myID = Auth::user()->id;
        $requestAll = array_except($request->toArray(), ['submit', '_token', 'page']);
        $query = DB::table('users')->select('*')->where('role', 'user')->where('id', '!=', $myID);
        foreach ($requestAll as $key => $req) {

            if ($req != '') {

                if ($key == 'ageFrom' && $request->ageTo == '') {
                    $query->where('UserAge', '>=', $req);
                } elseif ($key == 'ageTo' && $request->ageFrom == '') {
                    $query->where('UserAge', '<=', $req);
                } else {
                    if ($key != 'ageFrom' && $key != 'ageTo') {
                        $query->where($key, $req);
                    }
                }
            } elseif ($request->ageTo != '' && $request->ageFrom != '') {

                $query->whereBetween('UserAge', [$request->ageFrom, $request->ageTo]);
            }
        }
        $foundPartners = $query->paginate(16);
        //  dd($foundPartners);
        return view('users.partnerInvite', compact('foundPartners'));

    }

    //----------------------------------------------//
    //------------show my friends-------------------//
//----------------------------------------------//

    public function showFriends(Request $request)
    {
        $myID = Auth::user()->id;

        $users = DB::table('users')->leftJoin('friends', function ($join) {
            $join->on('friends.UserOneId', '=', 'users.id')
                ->orOn('friends.UserTwoId', '=', 'users.id');
        })
            ->where(function ($query) use ($myID) {

                $query->where([
                    'friends.UserOneId' => $myID,
                    'friends.status' => 1
                ])
                    ->orWhere([
                        'friends.UserTwoId' => $myID,
                        'friends.status' => 1
                    ]);
            })
            ->where('users.id', '!=', $myID)// Exclude the user with id $myID
            ->get();

        // dd($users);

        return view('users.friends', compact('users'));
    }



    //----------------------------------------------//
    //------------show my profile-------------------//
    //----------------------------------------------//

    /**
     * show user profile .........................................................................................................
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProfile($id)
    {

        $user = name::find($id);
        if ($id == Auth::user()->id) {
            return view('users.profile');
        } else {
            return view('users.friendProfile', compact('user'));
        }
    }

    public function editProfile(Request $request, $id)
    {
        $this->validate($request,[
            'UserName' => 'required|alpha|min:3|max:50'

            ]);
        $user = name::find($id);
        $user->UserName = $request['UserName'];
        $user->UserPhone = $request['UserPhone'];
        $user->UserJob = $request['UserJob'];
        /*not working*/
        $user->UserInterests = $request['UserInterests'];
        /**/
        $user->UserAbout = $request['UserAbout'];

        $user->save();

        $users = $user->all();
        return back()->withFlashMessage('Profile updated successfully');;
    }


    /**
     * upload user profile photo................................................................................................
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */


    public function upload(Request $request, $id)
    {
          $this->validate($request,
              [
                'UserPhoto'=>'required|mimes:jpeg,bmp,png,jpg'
              ]
              )   ;

        $user = name::find($id);
        $pic = Auth::user()->UserPhoto;
        if ($request->hasFile('UserPhoto')) {

            $picName = uploadImage($request->file('UserPhoto'), base_path() . '/public/uploads/' . $pic);
            $user->UserPhoto = $picName;
            $user->save();


            return back()->withFlashMessage('Photo uploaded successfully');;
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

        $this->validate($request,[
            'password' => 'required',
            'password_confirmation' =>'confirmed'

            ]);
        $user = name::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->withFlashMessage('Password updated successfully');;
    }


    public function showInvites()
    {
        return view('users.invites');
    }

    public function firebase()
    {


    }




    public function partnerNearBy(){





        return view('users.nearby');

    }

}



