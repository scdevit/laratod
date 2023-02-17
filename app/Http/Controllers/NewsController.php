<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public static function index(){
        echo 1;
    }

    public static function find_data($id){
        echo 'datamu : ' .$id;
    }
}
