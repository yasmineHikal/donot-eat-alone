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


Route::group(['middleware'=>['web','user']],function(){

    
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

    Route::get('messagesNotifications','messageController@getUserNotifications');
    Route::get('messages','messageController@getMessages');
    Route::post('message','messageController@getMessageById');
    Route::post('messageSent','messageController@getMessageSent');
    Route::post('sendMessage','messageController@sendMessage');


    ///////..............USER CONVERSATION...................... ////////////

    Route::get('Conversation','conversationController@getUserConversationById');
    Route::get('Conversation','conversationController@getUserConversationById');
    Route::get('Conversation','conversationController@getUserConversationById');



    ///////..............USER INVITATION...................... ////////////

    Route::post('invitation','invitationController@storeInvitation');
    Route::get('myInvitations','invitationController@getInvitations');

    Route::get('/approveInvitation','invitationController@approveInvitation');
    Route::get('/rejectInvitation','invitationController@rejectInvitation');

    ////////............User messages ................................//////////

    Route::get('messages','messageController@index');


});



            //----------------------------------------------------------------------//
            //-----------------------RESTAURANT ROUTES------------------------------//
            //---------------------------------------------------------------------//

Route::group(['middleware'=>['web','restaurant']],function(){

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













    Route::get('/firebase','userController@addUserToFireBase');

