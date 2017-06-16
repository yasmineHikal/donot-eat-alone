<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


Route::group(['middleware'=>['web']],function(){

  //  Route::auth();
    Route::get('auth/{provider}', 'AuthSocController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'AuthSocController@handleProviderCallback');
    Route::get('/', function () {
        return view('welcome');

    });
});




        //--------------------------------------------------------------------//
        //--------------------------ADMIN ROUTES------------------------------//
        //--------------------------------------------------------------------//


Route::group(['middleware'=>['admin']],function(){
    /* adminController */
    Route::get('/adminpanel','adminController@index');
    Route::get('/allAdmins','adminController@showAllAdmins');
    Route::get('/addAdmin','adminController@addAdmin');
    Route::post('/addAdmin','adminController@storeAdmin');
    Route::get('/admins/{id}/edit','adminController@editAdmin');
    Route::post('/admins/{id}','adminController@updateAdmin');
    Route::get('/admins/{id}/delete','adminController@destroyAdmin');
    //Route::resource('/admins','adminController');
    Route::get('/allRestaurants','adminController@showAllRestaurants');
    Route::get('addRestaurant','adminController@addRestaurant');
    Route::post('addRestaurant','adminController@storeRestaurant');
    Route::get('restaurants/{id}/edit','adminController@editRestaurant');
    Route::post('restaurants/{id}','adminController@updateRestaurant');
    Route::get('restaurants/{id}/delete','adminController@destroyRestaurant');

    Route::get('/allUsers','adminController@showAllUsers');
    Route::get('/reportedUsers','adminController@reportedUsers');
    /* adminController */

    /* restaurantController */
    Route::resource('restaurants','restaurantController');
    /*Route::get('/allRestaurants','restaurantController@showAllRestaurants');
    Route::get('/allRestaurants','adminController@showAllRestaurants');*/

    /* restaurantController */

    /**/
    Route::get('/adminProfile/{id}','adminController@showProfile');
    Route::post('/adminProfile/{id}','adminController@editProfile');
    Route::post('/uploadA/{id}','adminController@upload');
    Route::post('/editAPassword/{id}','adminController@editPassword');
    /**/


});
        //--------------------------------------------------------------------//
        //--------------------------USERS ROUTES------------------------------//
        //--------------------------------------------------------------------//


Route::group(['middleware'=>['user']],function(){

    
    Route::get('/home','userController@index');
    Route::get('/friends','userController@showFriends');
    Route::get('/profile/{id}','userController@showProfile');
    Route::post('/profile/{id}','userController@editProfile');
    Route::post('/upload/{id}','userController@upload');
    Route::post('/editPassword/{id}','userController@editPassword');
    Route::get('/findPartner', 'userController@findPartner');

    Route::get('/invites','userController@showInvites');

    ///////..............users nearby...................... ////////////


    Route::get('/nearby','userController@partnerNearBy');


    ///////..............USER MESSAGES...................... ////////////

<<<<<<< HEAD
   /* Route::get('messages','messageController@getMessages');
    Route::post('message','messageController@getMessageById');
    Route::post('messageSent','messageController@getMessageSent');
    Route::post('sendMessage','messageController@sendMessage');  */
=======
    Route::get('messagesNotifications','messageController@getUserNotifications');
    //Route::get('messages','messageController@getMessages');
    Route::get('/messages/{id}','messageController@getMessages');
    //Route::post('messages','messageController@getMessageById');
    //Route::post('messageSent','messageController@getMessageSent');
    Route::post('sendMessage/{id}','messageController@sendMessage');
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1


    ///////..............USER CONVERSATION...................... ////////////

<<<<<<< HEAD
    Route::get('messages','conversationController@index');
 //   Route::get('viewMessage','messageController@index');
    Route::post('sendMessage','messageController@sendMessage');

=======
    //Route::post('sendMessage','conversationController@sendMessage');
    Route::get('conversations','conversationController@allConversations');
    Route::get('conversations/{id}','conversationController@getAllConversations');
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1



    ///////..............USER INVITATION...................... ////////////

    Route::post('invitation','invitationController@storeInvitation');
    Route::get('myInvitations','invitationController@getInvitations');

    Route::get('/approveInvitation','invitationController@approveInvitation');
    Route::get('/rejectInvitation','invitationController@rejectInvitation');

    ////////............User Notifications ................................//////////
    Route::get('/notifications','notificationController@getNotification');
    Route::get('/cancelNotification','notificationController@cancelNotification');

<<<<<<< HEAD
    ////////............User navBarInfo ................................//////////

     Route::get('navBarNotification','userController@navBarNotification');
     Route::get('navBarMessage','userController@navBarMessage');

=======
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1


});



            //----------------------------------------------------------------------//
            //-----------------------RESTAURANT ROUTES------------------------------//
            //---------------------------------------------------------------------//

Route::group(['middleware'=>['restaurant']],function(){

    Route::get('/restaurant','restaurantController@index');
    Route::get('/reservations','reservationController@getReservations');
    /**/
        Route::get('/restaurant','restaurantController@index');
        Route::get('/restaurantProfile/{id}','restaurantController@showProfile');
        Route::post('/restaurantProfile/{id}','restaurantController@editProfile');
        Route::post('/uploadR/{id}','restaurantController@upload');
        Route::post('/editRPassword/{id}','restaurantController@editPassword');
    /**/


    //***   routes for approve and reject the reservation  ***/

    Route::get('/approve','reservationController@approveReservation');
    Route::get('/reject','reservationController@rejectReservation');




});













    Route::get('/firebase','userController@firebase');

