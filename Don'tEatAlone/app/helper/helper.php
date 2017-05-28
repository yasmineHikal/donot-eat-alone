<?php
function UserCity(){
    $array=[
       'nasr city'=>'nasr city',
       'madii'=>'madii'

    ];

    return $array;

}

function Gender(){
    $array=[
       'male'=> 'male',
        'female'=> 'female'

    ];

    return $array;

}

function role(){
  $array=[
          'admin'=>'Website Admin',
          'RManager'=>'Restaurant Admin'
  ];
  return $array;
}

function RMangerId(){
    $user=Illuminate\Support\Facades\DB::table('users')->where('role','RManager')->get();
    foreach($user as $k => $value) {
        $id[$value->id]= $value->email;

    }
  return $id;

}

function restaurant(){
    $restaurant=\Illuminate\Support\Facades\DB::table('restaurants')->get();
    foreach($restaurant as $k => $value) {
        $id[$value->id ]= $value->RestaurantName;

    }
    return $id;
}

function Age(){
    $array=[];
    for($y=16 ;$y<=100 ;$y++){
        $array[$y]=$y;
 }

    return $array;

}


function uploadImage($request ,$deleteFileWithName='',$path='/public/uploads/')
{

   $picName = rand(11111, 99999) . '_' . $request->getClientOriginalName();
   $request->move(base_path() .$path , $picName);

     if($deleteFileWithName != ''){
         if(file_exists($deleteFileWithName)){
             \Illuminate\Support\Facades\File::delete($deleteFileWithName);
         }

     }

    return $picName;
}



