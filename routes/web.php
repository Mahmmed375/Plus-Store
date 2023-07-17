<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home',[
            "page1"=>"/",
            "page2"=>"fashion",
            "page3"=>"Home_Appliances",
            "page4"=>"Electronic",
            "page5"=>"Help",
            "page6"=>"phone",
            "page7"=>"creat_prodect",
            "page8"=>"Today_Offers",
            "page9"=>"sing",
            "page10"=>"profile",
            "page11"=>"sing_up",
            "page_titl"=>"Home",
            "css"=>"C1",
            "js"=>"J1",
    ]);
});


Route::match(['get','post'],'/{name}', function ($name) {
     $pages=array("fashion",
          "Home_Appliances",
          "Electronic",
          "Help",
          "phone",
          "creat_prodect",
          "Today_Offers",
          'sing',
          'creat',
          "profile",
          "sing_up",
          'show',
          "sell",
          "exit"
        );

        if(in_array($name,$pages)){
            $name=$name;
        }else{
            return view('Home',[
                "page1"=>"/",
                "page2"=>"fashion",
                "page3"=>"Home_Appliances",
                "page4"=>"Electronic",
                "page5"=>"Help",
                "page6"=>"phone",
                "page7"=>"creat_prodect",
                "page8"=>"Today_Offers",
                "page9"=>"sing",
                "page10"=>"profile",
                "page11"=>"sing_up",
                "profile"=>"profile",
                "page_titl"=>"Home",
                "css"=>"C1",
                "js"=>"J1",
                 ]);
        }

        return view('pages/'.$name,[
            "page1"=>"/",
            "page2"=>"fashion",
            "page3"=>"Home_Appliances",
            "page4"=>"Electronic",
            "page5"=>"Help",
            "page6"=>"phone",
            "page7"=>"car",
            "page8"=>"Today_Offers",
            "page9"=>"sing",
            "page10"=>"profile",
            "page11"=>"sing_up",
            "page_titl"=>"Home",
            "css"=>$name,
            "js"=>$name
        ]);

});


