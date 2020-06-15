<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;

class HomeController extends Controller
{
    function index(){
        $rooms=Room::all();
        return view("user.home",["rooms"=>$rooms]);
    }
}
