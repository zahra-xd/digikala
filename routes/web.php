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
         $urlboot='<img src="/image/8.gif" class="d-block w-100" alt="...">';
         $urlboot1='<img src="/image/8.gif" class="d-block w-100" alt="...">';
         $urlboot2='<img src="/image/9.jpg" class="d-block w-100" alt="...">';
        $urlboot3='<img src="/image/10.jpg" class="d-block w-100" alt="...">';
         $urlboot4='<img src="/image/10.jpg" class="d-block w-100" alt="...">';
         $urlboot5='<img src="/image/11.jpg" class="d-block w-100" alt="...">';
        $urlboot6='<img src="/image/13.jpg" class="d-block w-100" alt="...">';
        return view('welcome',[
            'urlboot' => $urlboot ,
             'urlboot1' => $urlboot1 ,
            'urlboot2' => $urlboot2 ,
        'urlboot3' => $urlboot3 ,
             'urlboot4' => $urlboot4 ,
             'urlboot5' => $urlboot5 ,
            'urlboot6' => $urlboot6 ,
    
         ]);
      });
  

    Route::get('/', function () {
       return view('singleproduct');
    });


